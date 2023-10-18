<?php
require('classes/Files.php');
require('classes/Request.php');

$file = Request::get('file');
$folder = Request::get('folder');
$filePath = 'root/' . $folder . '/' . $file;

if (file_exists($filePath)) {
    Files::file($filePath);
} else {
    echo 'File not found.';
}