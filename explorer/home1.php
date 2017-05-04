<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge"> <!-- For intranet testing only, remove in production. -->
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>Helping Hand</title>

</head>

<body>
<table width="80%" border="0">
  <tr>
    <td colspan="2"><img src="layer1.jpg" width="1347" height="258" /></td>
  </tr>
  <tr>
    <td><div id="slideShowImages">
    <img src="1.jpg" alt="Slide 1" />
    <img src="3.jpg" alt="Slide 2" />
    <img src="4.jpg" alt="Slide 3" />    
    <img src="5.jpg" alt="Slide 4" />        
  </div>  <script src="slideShow.js"></script></td>
  <td>
  <?php ob_start();?>
	<body text="black">
	<div align="left">

<form method="get" action="https://www.google.com/search">
<input type="text" name="q" size="31" value="G:-">
</form>
</div>
	<div id="wrapper">
	<div class="login">
	<?php
	if(isset($_POST['name']) AND isset($_POST['pass']))
	{
	$user="Paul";
	$password="Paul";
	if($_POST['name']=="Paul" AND $_POST['pass']=="Paul")
	{
		header('Location:test.php');
	}
	else{
?>
	<div class="error">Incorrect username or password</div> 
	<?php	
		}
		}
	?>

<div align ="left">
<!DOCTYPE HTML> 
<html>  
<body> 
<div id="Login"> 
<fieldset style="width:30%">
<legend>Login</legend> 
<table border="0">  
<tr>
<form method="POST" action="home1.php"> 
<td>Name</td>
<td> 
<input type="text" name="name">
</td> 
</tr> 
<tr> 
<td>Password</td>
<td> 
<input type="password" name="pass">
</td> 
</tr> 
<tr>
<td>
<input id="button" type="submit" name="submit" value="Login">
</td> 
</tr> 
</form> 
</table> 
</fieldset> 
</div>
</body> 
</html>
<link rel="stylesheet" type="text/css" href="style.css">
</div>
</div> 
</div>
 <tr>
    <td colspan="2"><img src="welcome.jpg" width="1347" height="350" /></td>
  </tr>
  <tr>
    <td colspan="2" align="left"><img onClick="alert('Please Login First')" src="btnh+m.jpg" width="449" height="350" /><img onClick="alert('Please Login First')" src="btne.jpg" width="449" height="350" /><img onClick="alert('Please Login First')" src="btnc.jpg" width="449" height="350" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="about.jpg" width="1349" height="444" /></td>
  </tr>
</table>
</body>
</html>
