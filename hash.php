<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
header('X-Powered-By:0xBADCAB1E');

$hash['_algos']    = array('whirlpool', 'sha512', 'md5', 'crc32');
$hash['_string']   = $_GET['string'];
$hash['whirlpool'] = hash("whirlpool", utf8_decode($hash['_string']));
$hash['sha512']    = hash("sha512", utf8_decode($hash['_string']));
$hash['md5']       = hash("md5", $hash['_string']);
$hash['crc32']     = crc32(utf8_decode($hash['_string']));

echo json_encode($hash);

?>
