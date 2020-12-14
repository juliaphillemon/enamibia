<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* Database connection settings */
$host = 'localhost';
$user = 'erassy';
$pass = 'EAN@afm123,';
$db = 'enamibia';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
/*fdgd*/

$query = "SELECT * from products";


$result = $mysqli->query($query);
$rows = array();
  while($r = $result->fetch_assoc()) {
    $rows[] = $r;
  }

echo json_encode($rows);
