
<?php
 $to = $_POST['email'];
function sendMail(){
$conn = mysqli_connect('localhost','root','','sportsoversight');
  $to = $_POST['email'];
$Subject = "Reset PassWord";

$message = 'http://localhost/Sports%20oversight/forgot_password';
$headers = 'From: misleamha@gmail.com';

if(mail($to, $Subject, $message, $headers))
{
echo '<div id="emailsent">RESET PASSWORD LINK IS SENT TO YOUR EMAIL</div> <script>
     var x = document.getElementById("emailsent");


     x.className = "show";


     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
     </script>';

}
else{
    '<div id="emailsent">NOOO</div> <script>
     var x = document.getElementById("emailsent");


     x.className = "show";


     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
     </script>';
}

return $to;
}

function resetPassword(){

  $conn = mysqli_connect('localhost','root','','sportsoversight');

$sql = "SELECT 	account_ID FROM account WHERE(email = '".$to."')";

$qury =  mysqli_query($conn,$sql);
$result = mysqli_fetch_array($qury);
$accountID= $result[0];

$new_passWord_form = mysqli_real_escape_string($conn, $_POST['newpassword']);
$hashed_pass = sha1($new_passWord_form);

$sql_to_reset_password = "UPDATE account SET password = '".$hashed_pass."'  WHERE account_ID = '".$accountID."' ";

$run_reset = mysqli_query($conn,$sql_to_reset_password);

if($run_reset){
header('Location:index.php');
}



 }



 ?>
