<?php
// this file will retrieve data from the database and display it to the user
// it will take all the data from the table and show it to the user so they can see all the astronaut ids, names and number of misssions
// in a nice table
include "connect_database.php";

$query = "SELECT * FROM targets";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
	
if (mysqli_num_rows($result) > 0) {
	echo "<table class=`table table-bordered table-striped`>";
	echo "<tr>";
	echo "<td>target_name</td>";
	echo "<td>mission_type</td>";
	echo"<td>date_of_first_mission</td>";
	echo"<td>number_of_missions</td>";
	echo"</tr>";
}
$i=0;
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row["target_name"]."</td>";
	echo "<td>".$row["mission_type"]."</td>";
	echo "<td>".$row["date_of_first_mission"]."</td>";
	echo"<td>".$row["number_of_missions"]."</td>";
	echo "</tr>";
	$i++;
}
?>
<html>
<a href="http://localhost/assignment_folder/index.php">Return home</a>
<br><br>
</form>
</html>