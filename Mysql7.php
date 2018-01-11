<!doctype html>
<html>
<head><title> database</title></head>
<body>
<?php
  $mysqli = new mysqli("localhost", "root", "", "ecommerce");
  
  $itemname=$_POST['name'];
  $itemdesc=$_POST['des'];
  $itemprice=$_POST['price'];
  $itemsize=$_POST['size'];
  $itemquan=$_POST['quan'];
  $target_dir='uploads/';
  $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
  $uploadOk = 0;
  if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))
  { 
    echo "The file ". basename( $_FILES['fileToUpload']['name']). " has been uploaded"; 
    $uploadOk = 1;
  }
  else { 
    echo "Sorry, there was a problem uploading your file."; 
  } 
  if ($uploadOk == 1)
  {

  
  $sql2 = "INSERT into items(itemname, itemdesc, itemprice, sizes, quantity, itemspic) VALUES('".$itemname."','".$itemdesc."','".$itemprice."','".$itemsize."','".$itemquan."','".$target_file."')";
  $sql3 = "Select * from items";

if($mysqli->query($sql2) === true){
        echo "<h1>Records inserted successfully.</h1>";
    } else{
        echo "ERRor". $mysqli->error;
      }
 $result = $mysqli->query($sql3);
 if ($result->num_rows > 0) {
  
  
    echo "<br /> New record created succesfully<br />";
    echo "<table border=1 align=center cellpadding=10 cellspacing=7 >";
  while($row = $result->fetch_assoc()) {
    echo'<tr>';
    echo"<td>".$row['ID']."</td>";
    echo"<td>".$row['itemname']."</td>";
    echo"<td>".$row['itemdesc']."</td>";
    echo"<td>".$row['itemprice']."</td>";
    echo"<td>".$row['sizes']."</td>";
    echo"<td>".$row['quantity']."</td>";
    echo"<td>"."<img src=".$row['itemspic']." width='100'  height='100' />"."</td>";
    echo'</tr>';
  }
  echo"</table>";
  echo"</br>";
}
 else{

 echo"there is some error in connection";
 }
$mysqli->close();
}
 ?>

 </body>
 </html>