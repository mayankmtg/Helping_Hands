<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vendor</title>
</head>

<body>
<img src="back.jpg" style='position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:-1;'>
<table width="100%" border="0">
  <tr>
    <td align="center"><img src="chef_hat_cook_flat_design_icon-512.png" width="406" height="420" /></td>
  </tr>
  <tr>
    <td><h1>The Data For Paul Is:</h1></td>
  </tr>
  <tr>
    <td>
	<?php
$file=fopen('viraj.txt','r');
$filedata=fread($file,100000);
echo "$filedata";
fclose($file);
?>

	</td>
  </tr>
</table>
</body>
</html>
