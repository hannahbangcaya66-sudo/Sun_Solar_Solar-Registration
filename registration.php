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
$sql = "CREATE TABLE IF NOT EXISTS Users (
Fname VARCHAR(50) NOT NULL,
Lname VARCHAR(50) NOT NULL,
Mname VARCHAR(50),
Birthdate DATE NOT NULL,
Gender VARCHAR(20),
Email VARCHAR(100),
PhoneNumber VARCHAR(20),
Address VARCHAR(255),
Username VARCHAR(50),
Password VARCHAR(50)
);";

if ($conn->query($sql) === TRUE) {
echo "Table created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Department (
Administrator VARCHAR(50),
IT VARCHAR (50),
DISPATCH VARCHAR (50),
Accounting VARCHAR (50),
HR VARCHAR (50),
Marketing VARCHAR (50),
Sales VARCHAR (50),
Customer_Service VARCHAR (50)
);";

if ($conn->query($sql) === TRUE) {
echo "Table created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Users (Fname, Lname, Mname, Birthdate, Gender, Email, PhoneNumber, Address, Username, Password) VALUES ('Katherine', 'Sinagaraw', 'Olap', '1990-07-1', 'F', 'katsinagaraw@sunsonsolar.com', '408-317-3645', '', 'KittyKat16', 'K@tSunshine')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Users (Fname, Lname, Mname, Birthdate, Gender, Email, PhoneNumber, Address, Username, Password) VALUES ('Sol', 'Solis', '', '1967-01-08', 'M', 'sol.solis', '408-317-3645', '', '', '')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
