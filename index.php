<!DOCTYPE html>
<html>
<head>
	<title>SemaPhone HUAWEI</title>
	<style type="text/css">
		body{
			background-image: url(source/css/images/LogoHeader.png);
			background-size: 100% 720px ;
		}
		.box{
			margin: 150px;
			height: 400px;
			background-color:#333;
			opacity: 0.9;
		}
		.box h2{
			padding-top: 30px;
			size:20px;
			color: white;
		}
		.box p{
			text-align: center;
			margin: 30px;
			size:30px;
			color: white;
		}

	</style>
</head>
<body>
	<div class="box">
	<form method="POST" action="main.php" >
		<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong>Sign Guestbook </strong></td>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="addguestbook.php">
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><input name="name" type="text" id="name" size="40" /></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="40" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
</tr>
</table>
	</form>
	</div>
</body>
</html>
