<?php
session_start();
include("dbsettings.php");
$sql   = "INSERT INTO `reported_vehicles` (`vehicle_number`, `area_id`, `vehicle_type`, `smoke_severity`, `user_id`, `report_status`) VALUES ('" . $_POST['vnum'] . "', '" . $_POST['area'] . "', '" . $_POST['type_of_vehicle'] . "', '" . $_POST['severity'] . "', '" . $_POST['userid'] . "', 1)";

$query = mysqli_query($con, $sql);

$id = mysqli_insert_id($con);
if($id > 0) {
?>
   <script type='text/javascript'>
		alert("Vehicle Reported Successfully");
		parent.window.location="index.html";
	</script>
<?php
} else {
?>
	<script type='text/javascript'>
		alert("Something is missing !!");
		parent.window.location="index.html";
	</script>
<?php
}
?>
