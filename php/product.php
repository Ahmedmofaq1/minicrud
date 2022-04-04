<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webshop1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";//
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//var_dump($_GET);
$age = $_GET;
echo $age['p'];

$data = $conn->query("SELECT * FROM `cafetaria` WHERE `ID`=".$age['p'])->fetchAll();
var_dump($data);
?>