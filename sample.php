<?php

$request_uri = '/foo/bar/list';
$base_url = '/foo/bar';

$pos = strpos($request_uri, '?');

echo $pos;

if ($pos) {
    $request_uri = substr($request_uri, 0, $pos);
    echo 'hoge';
}

echo strlen($base_url);

echo (string)substr($request_uri, strlen($base_url));