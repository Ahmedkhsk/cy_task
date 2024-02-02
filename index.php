<?php
// input filtration and sanitization
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$Fname = filter_input(INPUT_POST,'Fname',FILTER_SANITIZE_STRING);
$Lname = filter_input(INPUT_POST,'Lname',FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

/*
//Validation
if(!$email || !$Fname || !$Lname || !$age || !$password){
    echo "Invalid input. Please fill in all fields with valid data.";
}
*/
 //retrive
  $email = $_GET['email'];
  $Fname = $_GET['Fname'];
  $Lname = $_GET['Lname'];
  $age = $_GET['age'];
  $password = $_GET['password'];
  
  echo "<h2>Hi,$Fname</h2>";
  echo "<p>Name: $Fname  $Lname</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Age: $age</p>";
?>