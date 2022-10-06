<?php
$servername = "127.0.0.1";
$username = "Admin";
$password = "RI7vRC_Ma(_21GJF";
$databasename = "stattracker";

try {
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
  
  }
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="dist/output.css">
  <script src="assets/JS/script.js"> </script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

  <title>Stat Tracker</title>
</head>

<body class="bg-slate-300">