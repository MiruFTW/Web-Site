<?php
echo '<div class="jumbotron">';
echo '<h1>Contact From Entries</h1>';
$dblink=db_connect("contact");
$sql="Select * From `contact_info` where 1";
$result=$dblink->query($sql) or
	die("<p>Something went wrong with <br>".$dblink->error);
echo '<table>';
echo '<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;First Name&emsp;&emsp;</td><td>Last Name&emsp;&emsp;</td><td>Email&emsp;&emsp;</td><td>Phone Number&emsp;&emsp;</td><td>Comments&emsp;&emsp;</td></tr>';
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr>';
	echo '<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$data['first_name'].'&emsp;&emsp;</td>';
	echo '<td>'.$data['last_name'].'&emsp;&emsp;</td>';
	echo '<td>'.$data['email'].'&emsp;&emsp;</td>';
	echo '<td>'.$data['phone_number'].'&emsp;&emsp;</td>';
	echo '<td>'.$data['comments'].'&emsp;&emsp;</td>';
	echo '</tr>';
}
echo '</table>';
echo '</div>';
?>