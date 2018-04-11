<?php
function registerFan()
{
$conn = mysqli_connect('localhost', 'root', '','sportsoversight');
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNum = mysqli_real_escape_string($conn, $_POST['phoneno']);
$dob = $_POST['dateofbirth'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
$city = mysqli_real_escape_string($conn, $_POST['city']);
$memStatus = mysqli_real_escape_string($conn, $_POST['Membership_Level']);
$club_ID = $_POST['Club_ID'];

$role = "Fan";

$rand = rand(1000,9999);
$pass_word = sha1($rand);
echo "<script>
alert($rand);
</script>";

$intoAccountTable = "INSERT INTO account(userName, password, role) VALUES ('".$user_name."','".$pass_word."', '".$role."')";
$query_insert_to_account_table =  mysqli_query($conn,$intoAccountTable);

$last_account_id_for_Fan = mysqli_insert_id($conn);

$into_Fan_Table = "INSERT INTO fan VALUES (NULL,NULL,'".$gender."','".$first_name."','".$last_name."','".$email."','".$phoneNum."','".$dob."','".$nationality."','".$city."','".$memStatus."','".$last_account_id_for_Fan."','".$club_ID."')";
$query_run_to_Fan_table = mysqli_query($conn, $into_Fan_Table);


if ($query_run_to_Fan_table) {
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
