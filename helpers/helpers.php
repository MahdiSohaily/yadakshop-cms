<?php
function site_url(string $url = ''): string
{
    return $_ENV['HOST_ADDR'] . $url;
}

function asset_url(string $url = ''): string
{
    return site_url('public/' . $url);
}

function view($path = '', $data = [])
{
    $data['user'] = $_SESSION['user'] ?? [];
    extract($data);

    $filePath = str_replace('.', '/', $path);

    $fullPath = BASE_PATH . "views/$filePath.php";

    if (file_exists($fullPath)) {
        include_once $fullPath;
    } else {
        // Handle the case where the view file doesn't exist
        echo "View not found: $path";
    }
}


function sanitizeString($str)
{
    $str = trim($str);
    $str = stripslashes($str);
    return htmlspecialchars($str, ENT_QUOTES);
}
