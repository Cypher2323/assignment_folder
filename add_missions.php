<?php
include "connect_database.php";

if(isset($_POST['submit'])){
     $destination = $_POST['destination'];
     $launch_date = $_POST['launch_date'];
	 $type = $_POST['mission_type'];
	 $crew_size = $_POST['crew_size'];
	 $target_id = $_POST['target_id'];
	 
     $sql = "INSERT INTO mission (destination,launch_date,type,crew_size,target_id)
     VALUES ('$destination','$launch_date','$type',$crew_size,$target_id)";
     if (mysqli_query($connection, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
}
?>
<html>
<form action = "" method = "POST">
  <label for="destination"> mission destination?:</label><br>
  <input type="text" name="destination"><br>
  <label for="launch_date"> when is the mission?:</label><br>
  <input type="date" name="launch_date"><br><br>
  <label for="name">what type of mission are you attending?:</</label><br>
  <input type="text" name="mission_type"><br><br>
  <label for="crew_size"> number of crew members?:</label><br>
  <input type="integer" name="crew_size"><br>
  <label for="target_id"> id of target?:</label><br>
  <input type="text" name="target_id"><br>
  <input type="submit" name="submit" value="submit"><br><br>
  <a href="http://localhost/assignment_folder/index.php">Return home</a>
</form>
</html>
 