<?php
session_start();
include("dbsettings.php");
$sql   = "SELECT id, area `name` FROM `area_name`";
$query = mysqli_query($con, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($query)) {
    $rows[] = $r;
}
header('Content-type: application/json'); 
echo $_GET['callback'];
print "(" . json_encode($rows) . ")";
?>
