<?php

require('classes/Request.php');

$folder = Request::get('folder');
$file = Request::get('file');
$filePath = 'root/' . $folder . '/' . $file;

$pageText = '';

foreach ($files as $file) {
    $filePath = $dirPath . '/' . $file;
    if (is_file($filePath)) {
        $fileContent = file_get_contents($filePath);
        $pageText .= "<h4>File " . substr($file, 15) . "</h4>";
        $pageText .= "<p>" . nl2br($fileContent) . "</p>";
    }
}