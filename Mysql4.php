<?php
$mysqli = new mysqli("localhost", "root", "", "ecommerce");

    if(!empty($_POST['username'])){ 
        $query = $mysqli->query("SELECT * FROM user WHERE Username='$_POST[username]' AND Password ='$_POST[password]'");
        if($query->fetch_assoc()) {
            echo "Logged in success";
            session_start();
            $_SESSION['username']=$_POST[username];
            header("location:option.php");
        }  else {
            echo "YOU ARE NOT REGISTERED USER...";
        }
        
    }
?>

