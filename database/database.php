<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "welearn";

  try {

    $database = new PDO("mysql:host=localhost;dbname=welearn1", $username, $password);
    // set the PDO error mode to exception
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
  }
  catch(PDOException $e)
  {
    echo "Connection failed: " . $e->getMessage();
  }

?>
