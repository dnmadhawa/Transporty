<?php  require_once('../inc/connection.php');

	$data='' ;
	$query = "SELECT * FROM `schedule` WHERE d_id = 1";

	if ( $sql=mysqli_query($connection, $query)) {
		 while($row =mysqli_fetch_assoc($sql)){
		 	$data .= "<tr>";
		 	$data .= "<td>{$row['sch_id']}</td>";
		 	$data .= "<td>{$row['v_id']}</td>";
		 	$data .= "<td>{$row['depature']} - {$row['arrival']}</td>";
		 	$data .= "<td>{$row['sch_date']}</td>";
		 	$data .= "<td>{$row['d_time']} - {$row['a_time']}</td>";
		 	$data .= "<td> $scount </td>";
		 	$data .= "</tr>";
		 }
	}else{
		$data "Empty";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>

<?php include_once 'sidebar.php'; ?>


<div class="container">
	<div class="con-body">
		<h2>Dashboard</h2>
		<hr>
		<table class="dash-table">
			<tr>
				<th>ID</th>
				<th>Vehicle ID</th>
				<th>From - To</th>
				<th>Date</th>
				<th>Time</th>
				<th>Booked Seat</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>1234</td>
				<td>ABC-1122</td>
				<td>Colombo - Kandy</td>
				<td>2021-06-10</td>
				<td>01.00a.m - 03.00a.m</td>
				<td>32</td>
				<td><button>Cancel</button></td>
			</tr>
		</table>
	</div>
</div>

</body>
</html>