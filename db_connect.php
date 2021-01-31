<?php
$database = "webshop";
global $db;
$db = new mysqli("127.0.0.1", "root", ""); 
if ($db->connect_errno) { 
    die($mess . $db->connect_error);
}
$datab= @$db->select_db($database);
if (!$datab){
   die("Hiányzó" . $db->error);
}
$db->set_charset('utf8');
?>