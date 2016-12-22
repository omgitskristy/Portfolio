<?php

$db['server'] = 'localhost';
$db['username'] = 'root';
$db['password'] = 'root';
$db['database'] = 'designsavvy';

$db = new mysqli($db['server'], $db['username'], $db['password'], $db['database']);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>