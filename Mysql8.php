<!doctype html>
<html>
<head><title> database</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />


<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
<?php
  $mysqli = new mysqli("localhost", "root", "", "ecommerce");
$sql3 = "Select * from items";
$result = $mysqli->query($sql3);
 if ($result->num_rows > 0) {
  
  
    echo "<br /> New record created succesfully<br />";
    echo "<table border=1 align=center cellpadding=10 cellspacing=7 >";
  while($row = $result->fetch_assoc()) {
    echo'<tr>';
    echo"<td><input type='checkbox'>".$row['ID']."</td>";
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
 echo'<button type="button" class="btn btn-success"><a href="Mysql8.php">AT TO THE MART</button>';
 echo'<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="Handbag" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>';
$mysqli->close();

 ?>
<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
 </body>
 </html>