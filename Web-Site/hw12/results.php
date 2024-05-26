<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>
<body>
<?php
	if (isset($_GET['submit']) && $_GET['submit'] == "submit")
	{
		echo "<div>First name is: $_GET[firstName]</div>";
		echo "<div>Last name is: $_GET[lastName]</div>";
		echo "<div>Email is: $_GET[email]</div>";
		echo "<div>Phone number is: $_GET[phoneNumber]</div>";
		echo "<div>Comment is: $_GET[comment]</div>";
	}
	else
	{
		echo "<h3>Please go back and fill in the form correctly</h3>";
	}
?>
</body>
</html>