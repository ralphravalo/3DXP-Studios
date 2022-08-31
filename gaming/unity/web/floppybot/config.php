<?php
/**
 * Created by PhpStorm.
 * User: maven
 * Date: 6/17/2022
 * Time: 11:08 PM
 */

$servername = "localhost";
$username = "u169116364_3dxpgaminglb";
$password = "D@59e6d248050";
$dbname = "u169116364_3dxpgaminglb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}