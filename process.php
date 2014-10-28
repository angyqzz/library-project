
<?php

//and here we gonna write to our book
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

print_r($_POST);
//$sql = "INSERT INTO books ('Title, Author, ISBN, Gr, Image)
//VALUES ('$_POST['Title']', '$_POST['Author']', '$_POST['ISBN']', null, 'null')";

$conn->close();

?>