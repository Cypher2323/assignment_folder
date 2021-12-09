<?php
include "connect_database.php";
// this file will contain a form for the user to fill in with 'astronaut_name' and 'number_of_missions'
// the output of this form will be used to add the data to the database
if(isset($_POST['submit'])){
     $mission_id = $_POST['mission_id'];
     $astronaut_id = $_POST['astronaut_id'];
	 
     $sql = "INSERT INTO attends (mission_id,astronaut_id)
     VALUES ($mission_id,$astronaut_id)";
     if (mysqli_query($connection, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
	 
	 
	 
}
?>
<!DOCTYPE html>
<html>
<form action = "" method = "POST">
  <label for="mission_id">id of mission:</label><br>
  <input type="integer" name="mission_id"><br>
  <label for="astronaut_id">astronaut id:</label><br>
  <input type="integer" name="astronaut_id"><br>
  <input type="submit" name="submit" value="submit"><br><br>
  <a href="http://localhost/assignment_folder/index.php">Return home</a>
</form>
</html>