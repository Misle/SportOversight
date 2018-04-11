<?php
function registerCommentator()
{
$conn = mysqli_connect('localhost','root','','sportsoversight');
$first_name = mysqli_real_escape_string($conn,  $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn,  $_POST['lastname']);
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$dob =  $_POST['dateofbirth'];
$media_working_for = mysqli_real_escape_string($conn, $_POST['mwf']);
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

$role = "commentator";

$rand = rand(1000,9999);
$pass_word = sha1($rand);
echo "<script>
alert($rand);
</script>";

$intoAccountTale = "INSERT INTO account(userName, password, role) VALUES ('".$user_name."','".$pass_word."', '".$role."')";
$query_insert_to_account_table =  mysqli_query($conn,$intoAccountTale);

 $last_account_id_for_Comm = mysqli_insert_id($conn);
$into_comm_table =  "INSERT INTO commentator VALUES (NULL,'".$first_name."','".$last_name."', '".$dob."','".$email."','".$nationality."','".$city."','".$media_working_for."','".$last_account_id_for_Comm."')";
$query_insert_to_comm_table = mysqli_query($conn,$into_comm_table );
if ($query_insert_to_comm_table) {
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
