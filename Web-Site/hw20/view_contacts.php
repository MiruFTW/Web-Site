<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<div class="jumbotron" style="text-align: center;">';
echo '<h1>Contact From Entries</h1>';
echo '<table style="margin: auto;">';
echo '<tr><td>First Name&emsp;</td><td>Last Name</td><td>Email</td><td>Phone Number</td><td>Comments</td></tr>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
echo '</div>';
?>
<script>
function refresh_data()
{
	$.ajax({
		type: 'post',
		url: 'https://ec2-3-142-52-231.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
		success: function(data){
			$('#results').html(data);
		}
	})
}
setInterval(function(){ refresh_data(); }, 500);
</script>