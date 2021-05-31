<?php require_once('inc/connection.php');?>
<?php
$schedule_list='';
//Getting the list of activities

$query="SELECT sch_id, depature ,d_time, arrival, a_time, price,status , sch_date FROM schedule";
$schedule= mysqli_query($connection,$query);

if($schedule)
{
 while($schedule1 =mysqli_fetch_assoc($schedule))
 {
     $schedule_list .= "<tr>";
     $schedule_list .= "<td>{$schedule1['sch_id']}</td>";
     $schedule_list .= "<td>{$schedule1['depature']}</td>";
     $schedule_list .= "<td>{$schedule1['d_time']}</td>";
     $schedule_list .= "<td>{$schedule1['arrival']}</td>";
     $schedule_list .= "<td>{$schedule1['a_time']}</td>";     
     $schedule_list .= "<td>{$schedule1['price']}</td>";
     $schedule_list .= "<td>{$schedule1['sch_date']}</td>";
     $schedule_list .= "<td>{$schedule1['status']}</td>";     
     
     
     

     $schedule_list .= "</tr>";


}

}else{
    echo "database query failed.";
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
	<div class="search-col">
		<div class="search-input">
			<label>Departure</label>
			<select name="Departure" id="Departure" placeholder="Departure"><!--section option-->
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
			<select name="Arrival" id="Arrival" placeholder="Arrival"><!--section option-->
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
	</div><br><br><br>
	<center>
		<button type="button">
         Submit</button>
	</center>
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