<?php
$database="sunson_solar";
$servername="localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";

$sql = "INSERT INTO Users (Firstname, Lastname, Middlename, Birthdate, Gender, Email, PhoneNumber, Address, Username, Password) VALUES ('Katherine', 'Sinagaraw', ' ', '2005-12-31 ', 'F', 'katsinagaraw@gmail.com', '09171234567', 'Pasig City', 'KittyKat16', 'K@tSunshine')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Users (Firstname, Lastname, Middlename, Birthdate, Gender, Email, PhoneNumber, Address, Username, Password) VALUES ('Santino', 'Sinagaraw', ' ', '1766-05-19 ', 'M', 'tinosinagaraw@gmail.com', '09177654321', 'Pasig City', 'Tino01', 'tinopogi123')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
