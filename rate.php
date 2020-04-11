<?php

mysql_connect("127.0.0.1","root","")or die ("Couldn't connect to server");
mysql_select_db("carating")or die("Couldn't connect to Database");

$movie = $_POST['movie'];
$post_rating = $_POST['rating'];

$find_data = mysql_query("SELECT * FROM rates WHERE movie='$movie'");
while($row = mysql_fetch_assoc($find_data))
{
      $id = $row['id'];	
	  $current_rating = $row['rating'];
	  $current_hits = $row['hits'];
}

$new_hits = $current_hits + 1;
$update_hits = mysql_query("UPDATE rates SET hits = '$new_hits' WHERE id='$id'");
 
 $pre_rating = $current_rating + $post_rating;
 $new_rating = $pre_rating / $new_hits;

 $update_rating = mysql_query("UPDATE rates SET rating = '$new_rating' WHERE id ='$id'");
 
 header("location: ratingdata.php");

?>