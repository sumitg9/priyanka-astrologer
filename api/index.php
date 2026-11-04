<?php
/**
 * Vercel Serverless Entry Point & Front Controller Router
 * Project: Priyanka Dey - Vedic Astrologer & Spiritual Consultant
 */

// Establish project root directory
$projectRoot = dirname(__DIR__);
chdir($projectRoot);

// Parse incoming request URI
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

// Security check: prevent directory traversal
if (strpos($path, '..') !== false) {
    http_response_code(400);
    echo 'Bad Request';
    exit;
}

// 1. Static asset serving fallback (if not directly served by Vercel static CDN)
if (!empty($path)) {
    $targetFile = $projectRoot . '/' . $path;

    // Check if the file exists directly
    if (is_file($targetFile)) {
        $ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($ext !== 'php') {
            serveStaticFile($targetFile, $ext);
            exit;
        }
    }

    // Check legacy assets path fallback (e.g. assets/foo.jpg -> assets/images/foo.jpg)
    if (strpos($path, 'assets/') === 0) {
        $imageFallback = $projectRoot . '/assets/images/' . basename($path);
        if (is_file($imageFallback)) {
            $ext = strtolower(pathinfo($imageFallback, PATHINFO_EXTENSION));
            serveStaticFile($imageFallback, $ext);
            exit;
        }
    }
}

// 2. Dynamic PHP Route Handling
// Root request -> index.php
if ($path === '' || $path === 'index.php') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    $_SERVER['PHP_SELF'] = '/index.php';
    require $projectRoot . '/index.php';
    exit;
}

// Check if direct PHP file exists (e.g. about.php or blog/what-is-a-birth-chart...php)
if (substr($path, -4) === '.php' && is_file($projectRoot . '/' . $path)) {
    $_SERVER['SCRIPT_NAME'] = '/' . $path;
    $_SERVER['PHP_SELF'] = '/' . $path;
    require $projectRoot . '/' . $path;
    exit;
}

// Check clean URL without .php extension (e.g. /about -> about.php)
if (is_file($projectRoot . '/' . $path . '.php')) {
    $_SERVER['SCRIPT_NAME'] = '/' . $path . '.php';
    $_SERVER['PHP_SELF'] = '/' . $path . '.php';
    require $projectRoot . '/' . $path . '.php';
    exit;
}

// Check directory index (e.g. /blog or /blog/ -> blog/index.php)
if (is_dir($projectRoot . '/' . $path) && is_file($projectRoot . '/' . $path . '/index.php')) {
    $_SERVER['SCRIPT_NAME'] = '/' . $path . '/index.php';
    $_SERVER['PHP_SELF'] = '/' . $path . '/index.php';
    require $projectRoot . '/' . $path . '/index.php';
    exit;
}

// If route not found
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found | Priyanka Dey</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body style="min-height:100vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:20px;background:#0d0b14;color:#f7edd9;font-family:sans-serif;">
    <div>
        <h1 style="font-size:3.5rem;margin-bottom:1rem;color:#f5931e;">404</h1>
        <p style="font-size:1.25rem;margin-bottom:2rem;color:#e8d8b8;">The requested page could not be found.</p>
        <a href="/" style="display:inline-block;padding:12px 24px;background:#f5931e;color:#0b0a12;text-decoration:none;border-radius:6px;font-weight:600;">Return to Homepage</a>
    </div>
</body>
</html>
<?php
exit;

/**
 * Helper function to serve static assets with correct MIME type and caching headers
 */
function serveStaticFile(string $filePath, string $ext): void {
    $mimes = [
        'css'   => 'text/css; charset=utf-8',
        'js'    => 'application/javascript; charset=utf-8',
        'svg'   => 'image/svg+xml',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'webp'  => 'image/webp',
        'gif'   => 'image/gif',
        'ico'   => 'image/x-icon',
        'json'  => 'application/json',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'txt'   => 'text/plain; charset=utf-8',
    ];

    $mime = $mimes[$ext] ?? 'application/octet-stream';
    header("Content-Type: $mime");
    header("Cache-Control: public, max-age=31536000, immutable");
    header("Content-Length: " . filesize($filePath));
    readfile($filePath);
}

