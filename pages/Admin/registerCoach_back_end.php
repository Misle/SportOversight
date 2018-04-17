<?php


function registerCoach()
{

  $conn = mysqli_connect('localhost','root','','sportsoversight');
  $first_name = mysqli_real_escape_string($conn,  $_POST['firstname']);
  $last_name = mysqli_real_escape_string($conn,  $_POST['lastname']);
  $user_name = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $dob =  $_POST['dateofbirth'];
  $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $coach_level = mysqli_real_escape_string($conn, $_POST['C_level']);
  $role = "Coach";




  $rand = rand(1000,9999);
  $pass_word = sha1($rand);
  echo "<script>
  alert($rand);
  </script>";

$intoAccountTale = "INSERT INTO account(userName, password, role, email) VALUES ('".$user_name."','".$pass_word."', '".$role."','".$email."')";
$query_insert_to_account_table =  mysqli_query($conn,$intoAccountTale);

 $last_account_id_for_Coach = mysqli_insert_id($conn);

  $intoCoachTable = "INSERT INTO coach VALUES (NULL, NULL, NULL, '".$first_name."','".$last_name."', '".$dob."','".$city."','".$email."','".$nationality."','".$coach_level."','".$last_account_id_for_Coach."')";
  $query_insert_to_coach_table =  mysqli_query($conn, $intoCoachTable);


if ($query_insert_to_coach_table) {
  echo '<div id="snackbar">User Registerd succesfully</div> <script>
 var x = document.getElementById("snackbar");


x.className = "show";


 setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
 </script>';
}else{
  echo "failed!!".mysqli_error($conn);
}



}
 ?>
