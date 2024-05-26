<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="file:///C|/Users/alfon/Documents/favicon.ico">
	 <link rel="stylesheet" href="../hw16/assets/css/main.css">

    <title>Welcome to Alfonso's Homepage!</title>

    <!-- Bootstrap core CSS -->
    <link href="../hw16/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../hw16/assets/css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../hw16/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Welcome To My Homepage</h3>
        <?php include("../hw16/navigation.php");?>
      </div>
		<?php
			$username="webuser";
			$password="))TX@kQxxvBp2-hb";
			$db="content";
			$hostname="localhost";
			$dblink=new mysqli($hostname,$username,$password,$db);
			if (mysqli_connect_errno())
			{
				die("Error connecting to database: ".mysqli_connect_error());
			}
			if (!isset($_GET['page']))
			{
				$page="index";
			}
			else
			{
				$page=addslashes($_GET['page']);
			}
			$sql="Select * from `pages` where `page_name`='$page'";
			$result=$dblink->query($sql) or
				die("<p>Something went wrong with: $sql</p>".$dblink->error);
			$data=$result->fetch_array(MYSQLI_ASSOC);
			echo $data['content_data'];
		?>

      <!-- Site footer -->
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
