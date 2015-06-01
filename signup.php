<?php
session_start();
include("dbsettings.php");
$sql   = "INSERT INTO `user_details` (`name`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
$query = mysqli_query($con, $sql);

$id = mysqli_insert_id($con);
if($id > 0) {
	$_SESSION['userid'] = $id;
	$_SESSION['username']   = $_POST['name'];
?>
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="plugins/jQuery/jquery.cookie.js"></script>
    <script type='text/javascript'>
		$.cookie("userid","<?php echo $_SESSION['userid']; ?>");
		$.cookie("username","<?php echo $_SESSION['username']; ?>");
		parent.window.location="index.html";
	</script>
<?php
} else {
?>
	<script type='text/javascript'>
		alert("You are already registered");
		parent.window.location="index.html";
	</script>
<?php
}
?>
