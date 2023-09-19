<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog System</title>
    <link rel="stylesheet" href="css/boostrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<?php
session_start();
include_once "sysgern/my_Session.php"; 
include_once "sysgern/postGenerator.php";
include_once "views/nav.php";
include_once "sysgern/membership.php";
?>

