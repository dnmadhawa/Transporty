<?php require_once('inc/connection.php');?>
<?php
$activity_list='';

//Getting the list of activities

$query="SELECT s.sch_id,s.v_id,s.depature,s.d_time,s.arrival,s.a_time,s.date,s.price,s.sch_date,p.s_count FROM schedule s,payment p, reservation r  ORDER BY s.sch_id";
$activity= mysqli_query($connection,$query);

if($activity)
{
 while($activity1 =mysqli_fetch_assoc($activity))
 {
     $activity_list .= "<tr>";
     $activity_list .= "<td>{$activity1['sch_id']}</td>";
     $activity_list .= "<td>{$activity1['v_id']}</td>";
     $activity_list .= "<td>{$activity1['depature']}</td>";
     $activity_list .= "<td>{$activity1['d_time']}</td>";
     $activity_list .= "<td>{$activity1['arrival']}</td>";
     $activity_list .= "<td>{$activity1['a_time']}</td>";
     $activity_list .= "<td>{$activity1['date']}</td>";
     $activity_list .= "<td>{$activity1['a_time']}</td>";
     $activity_list .= "<td>{$activity1['s_count']}</td>";
     $activity_list .= "<td>{$activity1['sch_date']}</td>";
     
     

     $activity_list .= "</tr>";


}

}else{
    echo "database query failed.";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking-Activity</title>
	<link rel="stylesheet" type="text/css" href="css/booking_activity.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<?php include'header.php';


	?>
	
<div class="head"><!--head-->
	<h2>Booking Activity</h2>
	<hr>
	
</div><!--head-->

<div class="content"><!--content-->
	<center>
	<table>
		<tr>
			<th>Route no</th>
            <th>From-To</th>
			<th>Date</th>
            <th>Time</th>
            <th>Book</th>
            <th>Status</th>
            
            
            
        </tr>
        <tr>
        	<td>2/17</td>
            <td>Colombo-Kegalla</td>
            <td>23 Jan 2021</td>
            <td>6.15am-8.30am</td>
            <td><center>05</center></td>
            <td><center><button class="cancelbtn">cancel</button></center></td>

        </tr>
        <tr>
        	<td>3/891</td>
            <td>Colombo-Kandy</td>
            <td>05 Feb 2021</td>
            <td>2.35pm-5.40am</td>
            <td><center>06</td>
            <td><center><button class="cancelbtn">cancel</button></center></td>
        </tr>

        <tr>
        	<td>2/187</td>
            <td>Matara-Kaluthara</td>
            <td>08 Feb 2021</td>
            <td>9.15am-11.05am</td>
            <td><center>03</center></td>
            <td><center><button class="cancelbtn">cancel</button></center></td>
        </tr>
        <tr>
        	<td>2/87</td>
            <td>Colombo-Kegalla</td>
            <td>19 Feb 2021</td>
            <td>9.20am-11.35am</td>
            <td><center>03</center></td>
            <td><center><button class="cancelbtn">cancel</button></center></td>
        </tr>
        
        <tr>
        	
        	<td>2/452</td>
            <td>Colombo-Kegalla</td>
            <td>07 March 2021</td>
            <td>1.10am-3.25am</td>
            <td><center>01</center></td>
            <td><center><button class="cancelbtn">cancel</button></center></td>
        </tr>
        





	</table>
</center>


</div><!--content-->
<?php include 'footer.php';

?>

<script type="text/javascript" src="js/booking_activity.js"></script>



<main>
   <h1>Activity<span><a href="add-activity.php">+ Add New</a></span></h1> 

    <table class="activitylist">
        <tr>
            <th>Sch Id</th>
            <th>V Id</th>
            <th>Depature</th>
            <th>Depature Time</th>
            <th>Arrival</th>
            <th>Arrival Time</th>
            <th>Date</th>
            <th>Book</th>
            <th>price</th>
            <th>Schedule date</th>
            <th>Status</th>
            
        </tr>

        <?php echo $activity_list;?>


    


</main>


</body>
</html>