<?php

require('classes/BasicFileManager.php');
require('classes/Files.php');
require('classes/Request.php');

$folder = Request::request('folder');
if($folder == '') {
    $folder = '.';
}
$bfm = new BasicFileManager();
$result = $bfm->set('file', 'root/' . $folder);
Files::redirect('.?result=' . $result);