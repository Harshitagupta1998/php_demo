<!doctype.html>
<html>
<body>
<?php
session_start();
if($_POST){
	echo "<h1>Your no. is ";
	echo($_POST['uguess']).'</h1>';
	$uguessphp=$_POST['uguess'];
	$sguess=rand(1,10);	
    if (isset($_SESSION['chances'])) {
		
		echo '<br /> Chances reduced to ='.$_SESSION['chances'].'<br />';
		}
	else 
		{
		$_SESSION['chances']=3;
		echo '<h2><br />Initially chances set to '.$_SESSION['chances'].'<br /></h2>';
		}
 	if(($sguess==$uguessphp)&&($_SESSION['chances']>=0))
		{
 		echo'<br /><h2>You win</h2>';
 		session_destroy();
		}
	else if($_SESSION['chances']==0)
	{
	echo "Click here to start new game<br/>";
	echo '<a href="Nubgame.php "target="_blank">Continue the game</a>';
	session_destroy();
	} 
	else {
		$_SESSION['chances']-=1;
		echo 'Continue playing,you still got chance';
		echo '<form action="" method="post">';
		echo 'NUMBER:<input type="num" num="uguess"/><br />';
		echo '<input type="hidden" name="uchances"/><br />';
		echo '<input type="submit" value="submit"/></form>';
	}
}

else
{
	echo '<form method="post">';
    echo 'No:<input type="text" name="uguess"/><br>';
    echo '<input type="submit" value="Submit"/>';
    echo '<input type="reset" value="Cancel"/>';
}
?>
</form>
</body>
</html>