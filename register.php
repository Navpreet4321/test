<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="register-css.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main">
<div id="register">
<div class="head1"><h3 align="center">CREATE ACCOUNT</h3></div>
<table align="center" cellspacing="3" cellpadding="5">
<form action="projregister-link.php" method="post" enctype="multipart/form-data">

<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" autofocus placeholder="username"></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" placeholder="password"></td>
</tr>
<tr>


<tr>
<td><label>Contact No.</label></td>
<td><input type="number" name="contacts"></td>
</tr>

<tr>
<td><label>Add Profile Photo</label></td>
<td><input type="file" name="image"></td>
</tr>

<tr>
<td><input type="submit" value="submit">
</td>
<td><input type="reset" value="reset"></td>
</tr>

</form>
</table>
</div>
</div>
</body>
</html>