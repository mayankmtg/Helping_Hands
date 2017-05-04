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
</body>
</html>