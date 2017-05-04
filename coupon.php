<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IIITD Mess Portal</title>
</head>

<body>
<img src="back.jpg" style='position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:-1;'>
<table width="100%" border="0">
  <tr>
    <td colspan="2" align="center"><img src="foodpage/onlinelogomaker-101115-0442.png" width="394" height="289" /></td>
    
  </tr>
  <tr>
    <td width="56%" align="center"><img src="coupon.png" width="217" height="186" /></td>
    <td width="44%">
	<?php
$file=fopen('viraj.txt','rw');
$filedata=fread($file,100000);
echo "$filedata";
fclose($file);
?>
<form method="post">
<table>
<tr>
<td>Coupon Number</td>
<td><input type="text" id="txtcouponid" name="txtcouponid"/> </td>
</tr>
<tr>
<td colspan="2">
<input type="submit" id="submit" name="submit" value="Submit"/> </td>
</tr>
<tr>
<th colspan="2"> 
<?php   
if(isset($_REQUEST['submit']))
{
$file=fopen('viraj.txt','rw');
$filedata=fread($file,100000);
list($date,$breakfast,$lunch,$evening,$dinner)=explode(" ",$filedata);
$txtcouponid=$_REQUEST['txtcouponid'];
if($breakfast==$txtcouponid)
{
$filedata = str_replace($breakfast, '', $filedata);
}
elseif($lunch==$txtcouponid)
{
$filedata = str_replace($lunch, '', $filedata);
}
elseif($evening==$txtcouponid)
{
$filedata = str_replace($evening, '', $filedata);
}
elseif($dinner==$txtcouponid)
{
$filedata = str_replace($dinner, '', $filedata);
}
else
{
echo ("You do not have access to this coupon number.\nPlease, Enter 5 digit number from the following:  ");	
}
echo "$filedata";
fclose($file);
unlink('viraj.txt');
$file=fopen('viraj.txt','w');
fwrite($file, $filedata);
}
?>
</th>
</tr>
</table>
</form>
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br /><br /><br /><img src="menu1.jpg" width="593" height="815" /></td>

  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="home1.php"><img src="logout.png" height=40 width=200></a></td>

  </tr>
</table>
</body>
</html>
