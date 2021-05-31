<?php require_once('../inc/connection.php');


$v_id=$_POST['v_id'];
$s_type=$_POST['s_type'];
$b_model=$_POST['b_model'];
$b_num=$_POST['b_num'];
$s_count=$_POST['s_count'];

$query="INSERT INTO `vehicle` (`v_id`, `s_type`, `bus_model`, `b_number`, `seat_count`, `v_date`) VALUES('{$v_id}','{$s_type}','{$b_model}','{$b_num}','{$s_count}','2021-05-31 01:00:35.000000')";

if(mysqli_query($connection,$query))
{

	header('Location:addvehicle.php');
}
else
{
	echo"Failed";
}

?>