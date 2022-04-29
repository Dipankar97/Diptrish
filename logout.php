<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<script type="text/javascript">
	alert("You are successfully logout! ! !");
	window.location = "index.html";
</script>
</body>
</html>