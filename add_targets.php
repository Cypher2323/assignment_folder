<?php
include "connect_database.php";

if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $number_missions = $_POST['number_missions'];
	 $type = $_POST['mission_type'];
	 $first_mission = $_POST['first_mission'];
	 
     $sql = "INSERT INTO targets (name,type,no_missions,first_mission)
     VALUES ('$name','$type',$number_missions,'$first_mission')";
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
  <label for="name">target name:</label><br>
  <input type="text" name="name"><br>
  
  <label for="name">what type of mission are you attending?:</</label><br>
  <input type="text" name="mission_type"><br><br>
  
  <label for="first_mission">date of first mission:</label>
  <input type="date" name="first_mission"><br><br>
  
  <label for="number_missions">number of missions:</label><br>
  <input type="integer" name="number_missions"><br>
  <input type="submit" name="submit" value="submit"><br><br>
  <a href="http://localhost/assignment_folder/index.php">Return home</a>
</form>
</html>

