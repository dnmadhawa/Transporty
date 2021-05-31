<?php require_once('inc/connection.php');?>
<?php
$activity_list='';

//Getting the list of activities

$query="SELECT s.depature, s.d_time, s.arrival, s.a_time ,r.sch_id, r.res_id,r.receipt_number,r.res_date,s.price,s.sch_date,s.status, r.s_num FROM schedule s,reservation r WHERE r.sch_id = s.sch_id AND r.p_id=1 AND r.r_status=1 ORDER BY r.sch_id";
$activity= mysqli_query($connection,$query);

if($activity)
{
 while($activity1 =mysqli_fetch_assoc($activity))
 {
     $activity_list .= "<tr>";
     $activity_list .= "<td>{$activity1['sch_id']}</td>";
     $activity_list .= "<td>{$activity1['res_id']}</td>";
     $activity_list .= "<td>{$activity1['depature']}</td>";
     $activity_list .= "<td>{$activity1['d_time']}</td>";     
     $activity_list .= "<td>{$activity1['arrival']}</td>";     
     $activity_list .= "<td>{$activity1['a_time']}</td>";     
     $activity_list .= "<td>{$activity1['receipt_number']}</td>";
     $activity_list .= "<td>{$activity1['res_date']}</td>";
     $activity_list .= "<td>{$activity1['price']}</td>";
     $activity_list .= "<td>{$activity1['sch_date']}</td>";
     $activity_list .= "<td>{$activity1['s_num']}</td>";
     $activity_list .= "<td>{$activity1['status']}</td>";
     $activity_list .= "<td><a href=\"modify_activity.php?rid={$activity1['res_id']}\">cancel</a></td>";
     
     
     

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
            <th>Depature</th>
            <th>Depature time</th>
            <th>Arrival</th>
            <th>Arrival time</th>
            <th>Reservation ID</th>
            <th>Receipt number</th>
            <th>Reservation date</th>
            <th>price</th>
            <th>Schedule date</th>
            <th>Seat number</th>
            <th>Status</th>
            
        </tr>

        
<?php echo $activity_list;?>

</table>


</main>



<?php include'footer.php';?>

<script type="text/javascript" src="js/booking_activity.js"></script>




</body>
</html>