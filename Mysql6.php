<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
  <?php
  session_start();
  if($_SESSION['username'])
  {
    echo "Welcome ".$_SESSION['username']."<br>";
    echo "<a href='Mysql5.php'>Logout</a>";
  }
  else
  {
    header("location:../Mysql.php");
  }
?>

<div class="container">
  <h2>ITEM DESCRIPTION</h2>
  <form action="Mysql7.php" method="post" enctype="multipart/form-data" name="frmToUpload" id="frmToUpload" >
    <div class="form-group">
      <label for="stuname">Item Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Item name" required="required">
    </div>
    <div class="form-group">
      <label for="stuphone">Item Description</label>
      <input type="text" class="form-control" name="des" placeholder="Enter item description" required="required">
    </div>
    <div class="form-group">
      <label for="email">Item Price</label>
      <input type="text" class="form-control" name="price" placeholder="Enter item price" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">Item size</label>
      <input type="text" class="form-control" name="size" placeholder="S/M/X/XL/XXL" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">Item Quantity</label>
      <input type="text" class="form-control" name="quan" placeholder="Enter Item Quantity" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">ImageUpload:</label>
      <input type="file" class="form-control" name="fileToUpload" placeholder="Enter Item Quantity" required="required">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</body> 
</html>
