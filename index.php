<?php
    session_start();
    if(!isset($_SESSION["logged-in"]) || $_SESSION["logged-in"] !== true){
        header("Location: login.php");
      }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardcollector</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include_once("header.inc.php");?>
    <main>
        <h1>Cardcollector</h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaWixn3FJR67IIU9Pq6cz-lwnVUQBmCN6ObQ&s" alt="test image">
    </main>
</body>
</html>