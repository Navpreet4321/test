<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="projectlogin-css.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include('lib.php');
?>
<div id="main">
<div id="login">
<div class="head1"><h1 align="center">TOURIST LOGIN</h1></div>
<table align="center" cellspacing="3" cellpadding="5">
<form action="projlogin-link.php" method="post" enctype="multipart/form-data">

<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" autofocus placeholder="username"></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" placeholder="password"></td>
</tr>
<tr>
<td><input type="submit"  value="submit"></td>
</tr>
</form>
</table>
</div>
</div>
</body>
</html>