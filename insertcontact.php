<?php

$data = json_decode(file_get_contents("php://input"));
$contactname = ($data->contactname);
$contactnumber = ($data->contactnumber);
$conn = new mysqli("localhost", "root","","test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO contact (CONTACTNAME, CONTACTNUMBER) VALUES ('".$contactname."','".$contactnumber."')";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>