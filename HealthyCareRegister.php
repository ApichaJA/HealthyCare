<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "MemberUserLogin";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $sql = "INSERT INTO UserLogin (Email, Password)
    VALUES ('TestUser', '1234')";

    if ($conn->query($sql) === TRUE) {
        echo "created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
