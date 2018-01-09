<?php
session_start();
session_unset();
session_destroy();

header("location: index.php");
exit();?>
<!DOCTYPE html>
<html>
<head>
<title>Your Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css"/>
<title>
</title>
</head>
<body>
