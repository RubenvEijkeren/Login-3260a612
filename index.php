<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User panel</h1>
<?php 
	if (!isset($_COOKIE['LoggedInUser'])){
		echo "<a href='login.php'>log in</a>";
	}
	else{
		echo "<h2>you're logged in</h2>";
	} 
?>
</body>
</html>