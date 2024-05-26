<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="file:///C|/Users/alfon/Documents/favicon.ico">
 <link rel="stylesheet" href="../hw12/assets/css/main.css">

<title>Welcome to Alfonso's Homepage!</title>

<!-- Bootstrap core CSS -->
<link href="../hw12/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../hw12/assets/css/justified-nav.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="page-wrapper">
<div id="page-inner">
	<form id="contact" method="get" action="results.php">
		<div class="form-group">
			<label for="firstName">First Name</label>
			<input name="firstName" type="name" class="form-control" id="firstName" placeholder="First Name">
			<p id="firstNameStatus"></p>
		</div>
		<div class="form-group">
			<label for="lastName">Last Name</label>
			<input name="lastName" type="name" class="form-control" id="lastName" placeholder="Last Name">
			<p id="lastNameStatus"></p>
		</div>
		<div class="form-group">
			<label for="email">Email Address</label>
			<input name="email" type="email" class="form-control" id="email" placeholder="Email">
			<p id="emailStatus"></p>
		</div>
		<div class="form-group">
			<label for="phoneNumber">Phone Number</label>
			<input name="phoneNumber" type="number" class="form-control" id="phoneNumber" placeholder="Phone Number">
			<p id="phoneNumberStatus"></p>
		</div>
		<div class="form-group">
			<label for="comment">Comments</label>
			<input name="comment" type="text" class="form-control" id="comment" placeholder="Comments">
			<p id="commentStatus"></p>
		</div>
		<button name="submit" type="submit" value="submit">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>
<script src="../hw12/assets/js/validation.js"></script>