<?php

function updateProfile(){



$conn = mysqli_connect('localhost','root','','sportsoversight');


 $newUsername = mysqli_real_escape_string($conn,  $_POST['username']);
  $newEmail = mysqli_real_escape_string($conn,  $_POST['email']);
  $new_passWord_form = mysqli_real_escape_string($conn, $_POST['password']);
  $new_passWord = sha1($new_passWord_form);

  if ($_POST['password'] != $_POST['confirm']){
    echo '<div id="snackbar2">Passwords are not the same</div> <script>
  var y = document.getElementById("snackbar2");


  y.className = "show";


  setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000);
  </script>';
  }
else{
  $update_u_name_pass_w = "UPDATE account SET userName = '".$newUsername."' , password = '".$new_passWord."'  WHERE account_ID = '".$_SESSION['accountID']."' ";



$query_run =  mysqli_query($conn,$update_u_name_pass_w);

if($query_run){
    echo '<div id="snackbar">Profile Updated succesfully</div> <script>
  var x = document.getElementById("snackbar");


  x.className = "show";


  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  </script>';
}
}





}



?>
