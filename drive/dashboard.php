<?php session_start(); ?>
<?php  require_once('inc/connection.php');


	if(!isset($_SESSION['d_id'])) {
		header("Location:../login.php");
	}
							


	$passid = 1;
	
	if (isset($_GET['id'])) {

		$s_id = $_GET['id'];
		
		$query1="UPDATE schedule SET status= 0 WHERE sch_id=$s_id";
		mysqli_query($connection, $query1);
			
	

	}

	if (isset($_GET['del_id'])) {

		$del_id = $_GET['del_id'];
		
		$query2="UPDATE schedule SET status= 1 WHERE sch_id=$del_id";
		mysqli_query($connection, $query2);

	}

	$data='' ;
	$query = "SELECT * FROM `schedule` WHERE d_id = $passid";

	if ( $sql=mysqli_query($connection, $query)) {
		 while($row =mysqli_fetch_assoc($sql)){
		 	$data .= "<tr>";
		 	$data .= "<td>{$row['sch_id']}</td>";
		 	$data .= "<td>{$row['v_id']}</td>";
		 	$data .= "<td>{$row['depature']} - {$row['arrival']}</td>";
		 	$data .= "<td>{$row['sch_date']}</td>";
		 	$data .= "<td>{$row['d_time']} - {$row['a_time']}</td>";

		 	$status = $row['status'];

		 	if ($status == "1") {
		 		$data .= "<td><a href='dashboard.php?id={$row['sch_id']} '><button>Cancel</button></a></td>";
		 	}else{

		 		$data .= "<td><a href='dashboard.php?del_id={$row['sch_id']} '><button class='Canceled'>Canceled</button></a></td>";
		 	}
		 	$data .= "</tr>";
		 }
	}else{

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="../img/logo-icon.png">
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
				<th>Status</th>
			</tr>
			<?php echo $data ?>
		</table>
	</div>
</div>

</body>
</html>