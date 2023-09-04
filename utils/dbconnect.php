<?php

function dbconnect() {
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "negah";
  
  $conn = new mysqli($hostname, $username, $password, $dbname);

  if($conn->connect_error) {
    die("Connection Faild" . $conn->connect_error);
  }

  return $conn;
}


