<?php
session_start();
unset($_SESSION);
?>
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="plugins/jQuery/jquery.cookie.js"></script>
    <script type='text/javascript'>
		$.removeCookie('userid');
		$.removeCookie('username');
		parent.window.location="index.html";
	</script>