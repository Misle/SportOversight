<?php

function regClubOwner()
{

$conn = mysqli_connect('localhost','root','','sportsoversight');
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$nation = mysqli_real_escape_string($conn,$_POST['nationality']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
$club_owning = mysqli_real_escape_string($conn,$_POST['clubowning']);
$role = "club_owner";

$rand = rand(1000,9999);
$pass_word = sha1($rand);
echo "<script>
alert($rand);
</script>";

$into_account_table = "INSERT INTO account(userName, password, role) VALUES ('".$user_name."','".$pass_word."','".$role."')";
$query_run_to_account = mysqli_query($conn,$into_account_table);

$last_account_id = mysqli_insert_id($conn);


$into_clubHead_table = "INSERT INTO club_head(first_name, last_name, email, nationality, Address, account_ID) VALUES('".$first_name."','".$last_name."','".$email."','".$nation."','".$city."','".$last_account_id."')";

$query_run_to_club_head = mysqli_query($conn,$into_clubHead_table);

$last_club_head_id = mysqli_insert_id($conn);


$into_club_table = "INSERT INTO club  VALUES (NULL,NULL,NULL,NULL,NULL,'".$club_owning."', '".$last_club_head_id."')";
$query_run_to_club_table = mysqli_query($conn, $into_club_table);
$last_club_id = mysqli_insert_id($conn);

echo "<script>
alert($last_club_id);
</script>";


if ($query_run_to_club_table) {
  echo '<div id="snackbar">User Registerd succesfully</div> <script>
  var x = document.getElementById("snackbar");


  x.className = "show";


  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
  </script>';
}


}
 ?>
