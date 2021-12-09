<?php
include "connect_database.php";
// this file will contain a form for the user to fill in with 'astronaut_name' and 'number_of_missions'
// the output of this form will be used to add the data to the database
if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $number_missions = $_POST['number_missions'];
	 
     $sql = "INSERT INTO astronaut (name,no_missions)
     VALUES ('$name',$number_missions)";
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
<!--Here I am creating a form for the user to input astronaut name and number of missions-->
  <label for="name">astronaut name:</label><br>
  <input type="text" name="name" required><br>
  <label for="number_missions">number of missions:</label><br>
  <input type="integer" name="number_missions" required><br>
  <input type="submit" name="submit" value="submit"><br><br>
  <a href="http://localhost/assignment_folder/index.php">Return home</a>
  
</form>
</html>
