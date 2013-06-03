<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('X-Powered-By:0xBADCAB1E');

switch ($_GET['hash']) {
  case 'whirlpool':
    echo hash("whirlpool", utf8_decode($_GET['string']));
    break;
  case "sha512":
    echo hash("sha512", utf8_decode($_GET['string']));
    break;
  case "md5":
    echo hash("md5", utf8_decode($_GET['string']));
    break;
  case "crc32":
    echo hash("crc32", utf8_decode($_GET['string']));
    break;
}

?>