<?php

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3Client = new Aws\S3\S3Client([
    'profile' => 'default',
    'region' => 'ap-southeast-1',
    'version' => '2006-03-01',
]);
$bucket = "nguyenthithanh";
$file = "thanhmademesad.txt";
$file = "xe_ford_everest_dang_kiem.png";
$cmd = $s3Client->getCommand('GetObject', [
    'Bucket' => $bucket,
    'Key'    => $file
]);

$request = $s3Client->createPresignedRequest($cmd, '+20 minutes');
var_dump($request->getUri());