<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="insert.php" method="post">
    <div class="form-group">   <!--needed for optimum spacing   red- danger blue primary green success -->
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
  </form>
</div>

</body>
</html>
