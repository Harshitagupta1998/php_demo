<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "mydatabase");
 

    if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
        }

    $Email = $_POST["email"];
    $Password = $_POST["pwd"];
 
    $sql = "INSERT INTO lists (email,password) VALUES
            ('$Email','$Password')";

    if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
         } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    $sql = "SELECT id, email, password FROM lists";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Email</th><th>passord</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"]. "</td><td> " . $row["password"]. "</td></tr>";
    }
    echo "</table>";
    }
    else {
    echo "0 results";
}

    $mysqli->close();
?>