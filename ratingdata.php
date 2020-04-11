<html>
<head>
<meta charset="utf-8">
<title>TMS</title>

<link href="ratingdata.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main">
<div id="pic">

<div id="fst">
<center>
<p id="p1">
<b>MOVIE RATING SITE</b>
<br>
<br>
<h3><i>Designed by.............</i><b>Navpreet</b></h3>
</p></center>
</div>
</div>

<div id = back></div>
<div id="back1"
<?php

mysql_connect("127.0.0.1","root","")or die ("Couldn't connect to server");
mysql_select_db("carating")or die("Couldn't connect to Database");

$find_data = mysql_query("SELECT * FROM rates");

while($row = mysql_fetch_assoc($find_data))
{
	$id = $row['id'];
	$name_of_movie = $row['nameofmovie'];
	$movie = $row['movie'];
	$current_rating = $row['rating'];
	$hits = $row['hits'];
	
	echo "
	<form action='rate.php' method='POST'>
	<html>
<body>
    <table>
	<tr>
	<th><h6>RATE MOVIES ON SCALE OF ONE TO FIVE </h6></th>
	</tr>
<tr>
<td>
	    $name_of_movie: <select name='rating'> 


				   <option>1</option>
				   <option>2</option>
				   <option>3</option>
				   <option>4</option>
				   <option>5</option>
		
		</select>

		</td>
		
		
		<td>
		<input type='hidden' value='$movie' name='movie'>
		</td>
	
		
	
		<td>
		<input type='submit' value='Rate!'> Current Rating: "; echo round($current_rating,2); echo "
		</td>
		</tr>
		
		</table>
		</body>
		</html>
		
	</form>
	  ";
	 
	
	}

?>
</div>
</div>
</body>