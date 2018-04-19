<?php
function regPlayer()
{
  $conn = mysqli_connect('localhost', 'root','','sportsoversight');
  $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
  $middle_name = mysqli_real_escape_string($conn, $_POST['middlename']);
  $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
  $user_name = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $dob =  $_POST['dateofbirth'];
  $nationality = $_POST['nationality'];
  $city = mysqli_real_escape_string($conn, $_POST['city']);

  $height = mysqli_real_escape_string($conn, $_POST['height']);
  $weight = mysqli_real_escape_string($conn, $_POST['weight']);
$role = "player";
  $rand = rand(1000,9999);
  $pass_word = sha1($rand);
  echo "<script>
  alert($rand);
  </script>";

  $intoAccountTale = "INSERT INTO account(userName, password, role, email) VALUES ('".$user_name."','".$pass_word."', '".$role."','".$email."')";
  $query_insert_to_account_table =  mysqli_query($conn,$intoAccountTale);

   $last_account_id_for_Player = mysqli_insert_id($conn);
   $intoPlayerTable = "INSERT INTO player VALUES (NULL, NULL,NULL,NULL,NULL,'".$first_name."','".$middle_name."', '".$last_name."','".$dob."','".$city."','".$nationality."','".$email."','".$height."','".$weight."','".$last_account_id_for_Player."')";
   $query_insert_to_player_table =  mysqli_query($conn, $intoPlayerTable);

  $last_player_id = mysqli_insert_id($conn);
$intoStatusTable = "INSERT INTO player_status VALUES(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'".$last_player_id."')";
$run_query_to_status_table = mysqli_query($conn, $intoStatusTable);

   if ($run_query_to_status_table) {
     echo '<div id="snackbar">Player Registerd succesfully</div> <script>
     var x = document.getElementById("snackbar");


     x.className = "show";


     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
     </script>';
   }
else {
    echo "failed!!".mysqli_error($conn);
}
}


 ?>
