<?php ob_start();?>
<body text="red">
<img src="test.jpg" style='position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:-1;'> 
<div align="right">
<form method="get" action="https://www.google.com/search">
<input type="text" name="q" size="31" value="">
</form>
</div>
	<div id="wrapper">
	<div class="login">
	<?php
	if(isset($_POST['username']) AND isset($_POST['password']))
	{
	$user="Viraj";
	$password="Viraj96";
	if($_POST['username']=="Viraj" AND $_POST['password']=="Viraj96")
	{
		header('Location:home.php');
	}
	else{
?>
	<div class="error">Incorrect username or password</div> 
	<?php
		}
		}
	?>

<div align ="right" >
<h1>LOGIN</h1>
<form action="login.php" method="post">
<h4>Username</h4>
<input type="text" name="username"/>
<h4>Password</h4>
<input type="password" name="password"/>
<p>
<input type ="submit" value="LOGIN" />
</p>
</div>
</form>
</div>
</div>
</body>