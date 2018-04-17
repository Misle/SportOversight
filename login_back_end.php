<?php

function Login()
{

session_start();
$uname = $_POST['username'];
$pass1 = $_POST['password'];

$passToCheck = sha1($pass1);

$conn = mysqli_connect('localhost','root','','sportsoversight');

$sql ="SELECT * FROM account WHERE (userName='".$uname."' and password= '".$passToCheck."')";
$qury =  mysqli_query($conn,$sql);

$result = mysqli_fetch_array($qury);


if ($uname == NULL) {
  echo '<div id="snackbar">Insert Username and Password</div> <script>
  var x = document.getElementById("snackbar");


  x.className = "show";


  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
  </script>';

}



if ($result[0]>0) {
  $_SESSION['accountID'] = $result[0];
  echo $_SESSION['accountID'];

  $role = $result[3];
  if ($role === "club_owner") {
    $_SESSION['userName'] = $uname;
      header('Location: pages/clubHead/index');
  }

  if ($role === "Coach") {
    $_SESSION['userName'] = $uname;
    header('Location: pages/coach/index');
  }
  if ($role === "Fan") {
    $_SESSION['userName'] = $uname;
    header('Location: pages/fans/index');
  }
  if ($role === "player") {
    $_SESSION['userName'] = $uname;
    header('Location: pages/player/index');
  }
  if ($role === "commentator") {
    $_SESSION['userName'] = $uname;

      header('Location: pages/commentator/index');

  }
  if ($role === "admin") {
    $_SESSION['userName']=$uname;
      header('Location: pages/Admin/index');
  }

}
else{
  echo '<div id="snackbar">Incorrect Username or Password</div> <script>
 var x = document.getElementById("snackbar");


x.className = "show";


 setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
 </script>';
}
}


 ?>
