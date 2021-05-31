<?php require_once('inc/connection.php');?>

<?php
$display=$_GET['rid'];

$query1="UPDATE reservation SET r_status= 0 WHERE res_id=$display";

$w= mysqli_query($connection,$query1);

if($w){
	header('Location:booking_activity.php');
}else{
	echo "ppp";
}
?>s