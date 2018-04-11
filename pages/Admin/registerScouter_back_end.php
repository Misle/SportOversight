<?php

function registerScouter()
{
  # code...

$conn = mysqli_connect('localhost','root','','sportsoversight');
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$dob =  $_POST['dateofbirth'];
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
$scouter_level = mysqli_real_escape_string($conn,$_POST['scouter_level']);
$role = "Scouter";


$rand = rand(1000,9999);
$pass_word = sha1($rand);
echo "<script>
alert($rand);
</script>";

$into_Account_table = "INSERT INTO account(userName, password, role) VALUES ('".$user_name."','".$pass_word."', '".$role."')";
$query_insert_to_account_table =  mysqli_query($conn,$into_Account_table);
$last_account_id_for_Scouter = mysqli_insert_id($conn);

$intoScouterTable = "INSERT INTO scouter VALUES (NULL, NULL, NULL,NULL,'".$first_name."','".$last_name."', '".$dob."','".$city."','".$email."','".$nationality."','".$scouter_level."','".$last_account_id_for_Scouter."')";
$query_insert_to_scouter_table =  mysqli_query($conn,$intoScouterTable);

if ($query_insert_to_scouter_table) {
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
