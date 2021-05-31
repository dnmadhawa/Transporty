<?php require_once('inc/connection.php');?>
<?php



$schedule_list='';
//Getting the list of activities

if (isset($_GET['submit'])) {
  $depature = $_GET['departure'];
  $arrival = $_GET['arrival'];
  if (isset($_GET['date'])) {
  $date = $_GET['date'];
    
  $query="SELECT sch_id, depature ,d_time, arrival, a_time, price,status , sch_date FROM schedule WHERE depature = '$depature' AND arrival = '$arrival' AND sch_date = '$date'";
  }else{

  $query="SELECT sch_id, depature ,d_time, arrival, a_time, price,status , sch_date FROM schedule WHERE depature = '$depature' AND arrival = '$arrival'";
  }

  $schedule= mysqli_query($connection,$query);

  if($schedule)
  {
 while($schedule1 =mysqli_fetch_assoc($schedule))
  {
     $schedule_list .= "<tr>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['sch_id']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['depature']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['d_time']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['arrival']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['a_time']}</a></td>";     
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['price']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['sch_date']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['status']}</a></td>";     
     
     
     

     $schedule_list .= "</tr>";


      }
      }
    }else{


$query="SELECT sch_id, depature ,d_time, arrival, a_time, price,status , sch_date FROM schedule";
$schedule= mysqli_query($connection,$query);

if($schedule)
{
<<<<<<< Updated upstream
 while($schedule1 =mysqli_fetch_assoc($schedule))
=======
 while($schdule1 =mysqli_fetch_assoc($schedule))
>>>>>>> Stashed changes
 {
     $schedule_list .= "<tr>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['sch_id']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['depature']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['d_time']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['arrival']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['a_time']}</a></td>";     
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['price']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['sch_date']}</a></td>";
     $schedule_list .= "<td><a class='test' href='reservation.php?sch_id={$schedule1['sch_id']}'>{$schedule1['status']}</a></td>";     
     
     
     

     $schedule_list .= "</tr>";


}

}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
  <link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" href="css/allschdule.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include_once 'header.php';?>
<div class="boarder">
<div class="search-bus container"><!-- search-bus -->
<<<<<<< Updated upstream
  <form action="allschdule.php" method="GET">
=======
  <form method="GET" action="allschdule.php">
>>>>>>> Stashed changes
	<div class="search-col">
		<div class="search-input">
			<label>Departure</label>
			<select name="departure" id="Departure" placeholder="Departure"><!--section option-->
          <option value="Colombo">Colombo</option>
          <option value="Monaragala">Monaragala</option>
          <option value="Kandy">Kandy</option>
	        <option value="Kegalla">Kegalla</option>
	        <option value="Badulla">Badulla</option>
          <option value="kaluthara">kaluthara</option>
          <option value="Galle">Galle</option>
          <option value="Mathara">Mathara</option>
          <option value="Madakalapuwa">Madakalapuwa</option>
          <option value="Ampara">Ampara</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Peradeniya">Peradeniya</option>
            </select><!--/section option-->
		</div>
		<div class="search-input">
			<label>Arrival</label>
			<select name="arrival" id="Arrival" placeholder="Arrival"><!--section option-->
          <option value="Colombo">Colombo</option>
          <option value="Monaragala">Monaragala</option>
          <option value="Kandy">Kandy</option>
	        <option value="Kegalla">Kegalla</option>
	        <option value="Badulla">Badulla</option>
          <option value="kaluthara">kaluthara</option>
          <option value="Galle">Galle</option>
          <option value="Mathara">Mathara</option>
          <option value="Madakalapuwa">Madakalapuwa</option>
          <option value="Ampara">Ampara</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Peradeniya">Peradeniya</option>
            </select><!--/section option-->
		</div>
		<div class="search-input">
			<label>Date</label>
			<input type="date" name="date">
		</div>
	</div>
  </form><br><br><br>
	<center>
		<input type="submit" name="submit">
	</center>
</form>
</div><!-- /search-bus --><br><br>

<h2>Bus Schedule For Colombo To Kegalla On 2021.03.20</h2>
<hr>


<main>
   <span><a href="add-allschedule.php"></a></span>
    
    <table class="schedulelist">
        <tr>
            <th>Schedule id</th>
            <th>Depature</th>
            <th>Depature time</th>
            <th>Arrival</th>
            <th>Arrival time</th>
            <th>Price</th>
            <th>Schedule Date</th>
            <th>Status</th>

            </tr>

        
<?php echo $schedule_list;?>

</table>


</main>

</div>


  
<?php include_once'footer.php';?>
</body>
</html>