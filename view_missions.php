<?php
// this file will retrieve data from the database and display it to the user
// it will take all the data from the table and show it to the user so they can see all the astronaut ids, names and number of misssions
// in a nice table
include "connect_database.php";

$query = "SELECT * FROM mission";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
	echo "<table class=`table table-bordered table-striped`>";
	echo "<tr>";
	echo "<td>mission_destination</td>";
	echo "<td>mission_date</td>";
	echo"<td>mission_type</td>";
	echo"<td>number_of_crew_members</td>";
	echo"<td>target_id</td>";
	echo"</tr>";
}
$i=0;
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row["destination"]."</td>";
	echo "<td>".$row["launch_date"]."</td>";
	echo "<td>".$row["type"]."</td>";
	echo "<td>".$row["crew_size"]."</td>";
	echo "<td>".$row["target_id"]."</td>";
	echo "</tr>";
	$i++;
}
?>
<!DOCTYPE html>
<html>
<a href="http://localhost/assignment_folder/index.php">Return home</a>
<br><br>
</form>
</html>