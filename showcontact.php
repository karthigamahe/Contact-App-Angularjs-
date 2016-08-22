<?php
	$data = json_decode(file_get_contents("php://input"));
	$conn = new mysqli("localhost", "root","","test");
		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		} 
	$sql = "SELECT * FROM contact";
	$result = $conn->query($sql);
?>
<h1>Contacts List</h1><hr><br>	
<table border="1">
	<tr>
		<th>Contact Name</th>
		<th>Contact Number</th>
	</tr>
<?php
	if ($result->num_rows  == 0) 
	{
		echo '<tr><td colspan="4">No Rows Returned</td></tr>';
	}
	else
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr><td>{$row['CONTACTNAME']}</td><td>{$row['CONTACTNUMBER']}</td></tr>\n";
		}
	}
?>
</table> 
<?php 
	$conn->close();
?>



<!-- <?php
$data = json_decode(file_get_contents("php://input"));
$conn = new mysqli("localhost", "root","","test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
?>
<h1>Contacts List</h1>
<table border="1">
<tr><th>Contact Name</th><th>Contact Number</th></tr>
<?php
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) {

  echo "<tr><td>{$row['CONTACTNAME']}</td><td>{$row['CONTACTNUMBER']}</td></tr>\n";
  ?>  
 
  </table>
  <?php
   //echo "{$row['CONTACTNAME']}{$row['CONTACTNUMBER']}\n";
}
} 
else
{
     echo "0 results";
}
$conn->close();
?> -->

