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
     $activity_list .= "<td>{$activity1['s_count']}</td>";
     $activity_list .= "<td>{$activity1['price']}</td>";
     $activity_list .= "<td>{$activity1['sch_date']}</td>";
     $activity_list .= "<td><button class=\"modify-activity.php?activity1_id={$activity1['id']}\">cancel</button></td>";
     
     
     

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

<main>
   <span><a href="add-activity.php"></a></span>

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

</table>

</main>



<?php include'footer.php';?>

<script type="text/javascript" src="js/booking_activity.js"></script>




</body>
</html>