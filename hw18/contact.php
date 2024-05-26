<?php
session_start();
echo '<div class="jumbotron">';
echo '<h1>Contact</h1>';
if (isset($_GET['msg']) && $_GET['msg']=="success")
{
	echo '<div class="alert alert-success alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>';
	echo 'Contact Info Successfully entered into database!';
}
if (!isset($_POST['submit']))
{
	echo '<form id="contact" method="post" action="">';
	if (!isset($_GET['fname'])) // No Error Found
	{
		if (isset($_SESSION['fname'])) // Check for previously submitted data
		{
			echo '<div class="form-group">';
			echo '<label for="firstName">First Name</label>';
			echo '<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name" 
			value="' . $_SESSION['fname'] . '">';
			echo '<p id="firstNameStatus"></p>';
			echo '</div>';
		}
		else // No previous submitted data found, display default input group
		{
			echo '<div class="form-group">';
			echo '<label for="firstName">First Name</label>';
			echo '<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">';
			echo '<p id="firstNameStatus"></p>';
			echo '</div>';
		}
	}
	elseif (isset($_GET['fname']))
	{
		if ($_GET['fname']=="fnameNull")
		{
			echo '<div class="form-group has-error">';
			echo '<label for="inputError1">First Name</label>';
			echo '<input name="firstName" type="text" class="form-control" id="inputError1" placeholder="First Name">';
			echo '<p class="alert-danger" id="firstNameStatus">First Name cannot be blank!</p>';
			echo '</div>';
		}
		elseif ($_GET['fname']=="fnameInvalid")
		{
			if (isset($_SESSION['fname']))
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">First Name</label>';
				echo '<input name="firstName" type="text" class="form-control" id="inputError1" placeholder="First Name"
				value="' . $_SESSION['fname'] . '">';
				echo '<p class="alert-danger" id="firstNameStatus">Invalid First Name Data!</p>';
				echo '</div>';
			}
		}
	}
	if (!isset($_GET['lname'])) // No errors found
	{
		if (isset($_SESSION['lname']))
		{
			echo '<div class="form-group">';
			echo '<label for="lastName">Last Name</label>';
			echo '<input name="lastName" type="name" class="form-control" id="lastName" placeholder="Last Name"
			value="' . $_SESSION['lname'] . '">';
			echo '<p id="lastNameStatus"></p>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group">';
			echo '<label for="lastName">Last Name</label>';
			echo '<input name="lastName" type="name" class="form-control" id="lastName" placeholder="Last Name">';
			echo '<p id="lastNameStatus"></p>';
			echo '</div>';
		}

	}
	elseif (isset($_GET['lname']))
	{
		if ($_GET['lname']=="lnameNull")
		{
			echo '<div class="form-group has-error">';
			echo '<label for="inputError2">Last Name</label>';
			echo '<input name="lastName" type="name" class="form-control" id="inputError2" placeholder="Last Name">';
			echo '<p class="alert-danger" id="lastNameStatus">Last Name cannot be blank!</p>';
			echo '</div>';
		}
		else
		{
			if (isset($_SESSION['lname'])=="lnameInvalid")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError2">Last Name</label>';
				echo '<input name="lastName" type="name" class="form-control" id="inputError2" placeholder="Last Name"
				value="' . $_SESSION['lname'] . '">';
				echo '<p class="alert-danger" id="lastNameStatus">Invalid Last Name Data!</p>';
				echo '</div>';
			}
		}
	}
	if (!isset($_GET['email']))
	{
		if (isset($_SESSION['email']))
		{
			echo '<div class="form-group">';
			echo '<label for="email">Email Address</label>';
			echo '<input name="email" type="text" class="form-control" id="email" placeholder="Email"
			value="' . $_SESSION['email'] . '">';
			echo '<p id="emailStatus"></p>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group">';
			echo '<label for="email">Email Address</label>';
			echo '<input name="email" type="text" class="form-control" id="email" placeholder="Email">';
			echo '<p id="emailStatus"></p>';
			echo '</div>';
		}
	}
	elseif (isset($_GET['email']))
	{
		if ($_GET['email']=="emailNull")
		{
			echo '<div class="form-group has-error">';
			echo '<label for="inputError3">Email Address</label>';
			echo '<input name="email" type="text" class="form-control" id="inputError3" placeholder="Email">';
			echo '<p class="alert-danger" id="emailStatus">Email cannot be blank!</p>';
			echo '</div>';
		}
		else
		{
			if (isset($_SESSION['email'])=="emailInvalid")
			{
				echo '<div class="form-group has-error">';
				echo '<label for="inputError3">Email Address</label>';
				echo '<input name="email" type="text" class="form-control" id="inputError3" placeholder="Email"
				value="' . $_SESSION['email'] . '">';
				echo '<p class="alert-danger" id="emailStatus">Invalid Email Data!</p>';
				echo '</div>';
			}
		}
	}
	if (!isset($_GET['phoneNumber']))
	{
		if (isset($_SESSION['phoneNumber']))
		{
			echo '<div class="form-group">';
			echo '<label for="phoneNumber">Phone Number</label>';
			echo '<input name="phoneNumber" type="text" class="form-control" id="phoneNumber" placeholder="Phone Number"
			value="' . $_SESSION['phoneNumber'] . '">';
			echo '<p id="phoneNumberStatus"></p>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group">';
			echo '<label for="phoneNumber">Phone Number</label>';
			echo '<input name="phoneNumber" type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">';
			echo '<p id="phoneNumberStatus"></p>';
			echo '</div>';
		}
	}
	elseif (isset($_GET['phoneNumber']))
	{
		if ($_GET['phoneNumber']=="phoneNull")
		{
			echo '<div class="form-group has-error">';
			echo '<label for="inputError4">Phone Number</label>';
			echo '<input name="phoneNumber" type="text" class="form-control" id="inputError4" placeholder="Phone Number">';
			echo '<p class="alert-danger" id="phoneNumberStatus">Phone number cannot be blank!</p>';
			echo '</div>';
		}
		else
		{
			if (isset($_SESSION['phoneNumber'])=="phoneInvalid")
			{
				echo '<div class="form-group has-error">';
			echo '<label for="inputError4">Phone Number</label>';
			echo '<input name="phoneNumber" type="text" class="form-control" id="inputError4" placeholder="Phone Number"
			value="' . $_SESSION['phoneNumber'] . '">';
			echo '<p class="alert-danger" id="phoneNumberStatus">Invalid Phone Number Data!</p>';
			echo '</div>';
			}
		}
	}
	if (!isset($_GET['comment']))
	{
		if (isset($_SESSION['comment']))
		{
			echo '<div class="form-group">';
			echo '<label for="comment">Comments</label>';
			echo '<textarea name="comment" type="text" class="form-control" id="comment" placeholder="Comments"
			value="' . $_SESSION['comment'] . '"></textarea>';
			echo '<p id="commentStatus"></p>';
			echo '</div>';
		}
		else
		{
			echo '<div class="form-group">';
			echo '<label for="comment">Comments</label>';
			echo '<textarea name="comment" type="text" class="form-control" id="comment" placeholder="Comments"></textarea>';
			echo '<p id="commentStatus"></p>';
			echo '</div>';
		}
	}
	elseif (isset($_GET['comment']))
	{
		if ($_GET['comment']=='commentNull')
		{
			echo '<div class="form-group has-error">';
			echo '<label for="inputError5">Comments</label>';
			echo '<textarea name="comment" type="text" class="form-control" id="inputError5" placeholder="Comments"></textarea>';
			echo '<p class="alert-danger" id="commentStatus">Comment cannot be blank!</p>';
			echo '</div>';
		}
		else
		{
			if (isset($_SESSION['comment'])=="commentInvalid")
			{
				echo '<div class="form-group has-error">';
			echo '<label for="inputError5">Comments</label>';
			echo '<textarea name="comment" type="text" class="form-control" id="inputError5" placeholder="Comments"
			value="' . $_SESSION['comment'] . '"></textarea>';
			echo '<p class="alert-danger" id="commentStatus">Invalid Comment Data!</p>';
			echo '</div>';
			}
		}
	}
	echo '<button name="submit" type="submit" value="submit">Submit</button>';
	echo '</form>';
}
if (isset($_POST['submit']))
{
	if ($_POST['submit']=="submit")
	{
		$errStatus=array();
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$email=$_POST['email'];
		$phoneNumber=$_POST['phoneNumber'];
		$comment=$_POST['comment'];
		if ($firstName == NULL)
		{
			$errStatus[]="fname=fnameNull";
		}	
		elseif (!preg_match('/^[a-zA-Z\'-]+$/', $firstName))
		{
			$errStatus[]="fname=fnameInvalid";
		}
		$_SESSION['fname'] = $firstName;

		if ($lastName == NULL)
		{
			$errStatus[]="lname=lnameNull";
		}
		elseif (!preg_match('/^[a-zA-Z\'-]+$/', $lastName))
		{
			$errStatus[]="lname=lnameInvalid";
		}
		$_SESSION['lname'] = $lastName;

		if ($email == NULL)
		{
			$errStatus[]="email=emailNull";
		}
		elseif (!preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email))
		{
			$errStatus[]="email=emailInvalid";
		}
		$_SESSION['email'] = $email;

		if ($phoneNumber == NULL)
		{
			$errStatus[]="phoneNumber=phoneNull";
		}
		elseif (!preg_match('/^\d{10}$/', $phoneNumber))
		{
			$errStatus[]="phoneNumber=phoneInvalid";
		}
		$_SESSION['phoneNumber'] = $phoneNumber;

		if ($comment == NULL)
		{
			$errStatus[]="comment=commentNull";
		}
		elseif (!preg_match('/.{1,}/', $comment))
		{
			$errStatus[]="comment=commentInvalid";
		}
		$_SESSION['comment']=$comment;

		if (count($errStatus)>0)
		{
			$errString=implode("&", $errStatus);
			redirect("https://ec2-3-142-52-231.us-east-2.compute.amazonaws.com/hw18/index.php?page=contact&$errString");
		}
		$dblink=db_connect("contact");
		$fnameClean=addslashes($firstName);
		$lnameClean=addslashes($lastName);
		$emailClean=addslashes($email);
		$phoneNumberClean=addslashes($phoneNumber);
		$commentClean=addslashes($comment);
		$sql="Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone_number`,`comments`) values
		('$fnameClean','$lnameClean','$emailClean','$phoneNumberClean','$commentClean')";
		$dblink->query($sql) or
			die("<p>Something went wrong with: $sql<br>".$dblink->error."</p>");
		redirect("https://ec2-3-142-52-231.us-east-2.compute.amazonaws.com/hw18/index.php?page=contact&msg=success");
		echo "<div>First Name is: $_POST[firstName]</div>";
		echo "<div>Last Name is: $_POST[lastName]</div>";
		echo "<div>Email is: $_POST[email]</div>";
		echo "<div>Phone Number is: $_POST[phoneNumber]</div>";
		echo "<div>Comment is: $_POST[comment]</div>";
		echo "<div>Submit is: $_POST[submit]</div>";
	}
}
echo '</div>';
?>