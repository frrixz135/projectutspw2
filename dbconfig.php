<?php
/**
 * Created by PhpStorm.
 * User: surid
 * Date: 8/12/18
 * Time: 3:14 AM
 */

$servername = "127.0.0.1";
/*$username = "bihar_ecom";
$password = "bihar123";*/
$db = "bihar_db";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}