<?php
session_start();
include("dbsettings.php");
$sql   = "SELECT * FROM `user_details` WHERE `email` = '" . $_POST['email'] . "' and `password` =  '" . $_POST['password'] . "'";
$query = mysqli_query($con, $sql);
if ($row =mysqli_fetch_assoc($query)) {
	$_SESSION['userid'] = $row['id'];
	$_SESSION['username']   = $row['name'];
?>
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="plugins/jQuery/jquery.cookie.js"></script>
    <script type='text/javascript'>
		$.cookie("userid",'<?php echo $_SESSION['userid']; ?>' <?php if(isset($_POST['remember'])){echo ", { expires: 365 }";} ?>);
		$.cookie("username",'<?php echo $_SESSION['username']; ?>' <?php if(isset($_POST['remember'])){echo ", { expires: 365 }";} ?>);
		parent.window.location="index.html";
	</script>
<?php
} else {
?>
	<script type='text/javascript'>
		alert("Invalid UserID/Password");
	</script>
<?php
}
?>
