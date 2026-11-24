<?php

$tmpStorage = '/tmp/storage/framework';
foreach (['views', 'cache', 'sessions'] as $dir) {
    $path = "$tmpStorage/$dir";
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

if (!getenv('VIEW_COMPILED_PATH')) {
    putenv("VIEW_COMPILED_PATH=$tmpStorage/views");
    $_ENV['VIEW_COMPILED_PATH'] = "$tmpStorage/views";
    $_SERVER['VIEW_COMPILED_PATH'] = "$tmpStorage/views";
}

require __DIR__ . '/../public/index.php';
