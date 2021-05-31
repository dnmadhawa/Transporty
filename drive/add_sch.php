<?php require_once('../inc/connection.php');?>
<?php
  
    $d_id= 1;
    $v_id=$_POST['Select_Vehicle'];
    $departure=$_POST['departure'];
    $d_time=$_POST['d_time'];
    $arrival=$_POST['arrival'];
	 $a_time=$_POST['a_time'];
	 $sch_date=$_POST['sch_date']; 
	 $price=$_POST['price'];
	
	$query = "INSERT INTO `schedule` (`sch_id`, `v_id`, `d_id`, `depature`, `d_time`, `arrival`, `a_time`, `price`, `sch_date`, `status`) VALUES (NULL, '{$d_id}', '{$v_id}', '{$departure}', '{$d_time}', '{$arrival}', '{$a_time}', '{$price}', '{$sch_date}', '1')";


	echo $departure;
	echo $d_time;
   echo $arrival;
	echo $a_time;


if(mysqli_query($connection,$query))
{
	echo "Successfully Added";
}
else
{
	echo "Error";
}
   ?>