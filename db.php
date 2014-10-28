

<?php

//database reading
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name FROM gruppid";
$result = $conn->query($sql);
$muutuja = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($muutuja, $row['Name']);
    }
} else {
    echo "0 results";
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 = "SELECT Title, Author, ISBN, Image, Gr FROM books";
$result = $conn->query($sql1);
$book = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($book, $row);
    }
} else {
    echo "0 results";
}
$conn->close();

?>