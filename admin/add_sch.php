<?php require_once('../inc/connection.php');?>
<?php
  
   
 
    $v_id=$_POST['Select_Vehicle'];
    $departure=$_POST['departure'];
    $d_time=$_POST['d_time'];
    $arrival=$_POST['arrival'];
	$a_time=$_POST['a_time'];
	$sch_date=$_POST['sch_date'];
	$price=$_POST['price'];
	
	$query = "INSERT INTO `schedule` (`sch_id`, `v_id`, `depature`, `d_time`, `arrival`, `a_time`, `sch_date`, `price`) VALUES (NULL, '{$v_id}', '3', '13:07:30', 'werw', '21:07:30', '2021-05-13', '21');";

	
if(mysqli_query($connection,$query))
{
	echo "susss";
}
else
{
	echo "swwww";
}
   ?>