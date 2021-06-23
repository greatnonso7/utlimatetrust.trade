<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "fortra_market";


try {
  $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
} catch (PDOException $err) {
  echo $err->getMessage();
}
