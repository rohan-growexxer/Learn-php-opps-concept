<?php

$servername = "localhost";
$username = "root";
$password = "Root@123#";
$dbname = "phpopps";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection FailedL ". $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: {$row["id"]} - Name: {$row["student_name"]} - Age: {$row["age"]} \n";
    }
} else {
    echo "No Result Found..";
}

$conn->close();

?>