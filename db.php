<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PW', 'test');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'dawn_services');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME);

if (!$db) {
  die('error connecting to database.');
}
 ?>
