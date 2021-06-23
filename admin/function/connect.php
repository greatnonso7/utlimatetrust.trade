<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "ultimate_trade";


try {
  $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
} catch (PDOException $err) {
  echo $err->getMessage();
}
