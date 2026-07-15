<?php
$host = "localhost";
$dbname = "princea1_db";
$username = "princea1_db";
$password = "S1a2d3i4@";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
<?php
$host = "localhost";
$dbname = "princea1_db";
$username = "YOUR_MYSQL_USERNAME";
$password = "YOUR_MYSQL_PASSWORD";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>