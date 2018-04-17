<?php
if (isset($_POST["resetpassword"])) {

      include "sendmail.php";
          resetPassword();

    }


?>
<!DOCTYPE html>
<html>
<style>
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: red; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sports OverSights  | Forget PassWord</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/custome.css">



	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body class="hold-transition login-page" style = "overflow:hidden;">

<section style = "position:absolute; z-index:-999;top :0px; bottom:0px;">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/3wesvbb.jpg" alt="3WEsvbb" title="3WEsvbb" id="wows0_0"/></li>
		<li><img src="data0/images/10723729253_c53fdd0566_o.jpg" alt="10723729253_c53fdd0566_o" title="10723729253_c53fdd0566_o" id="wows0_1"/></li>
		<li><img src="data0/images/dsc_0100.jpg" alt="wowslideshow" title="dsc_0100" id="wows0_2"/></a></li>
		<li><img src="data0/images/maxresdefault.jpg" alt="maxresdefault" title="maxresdefault" id="wows0_3"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">http://wowslider.net/</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

  </section>
<div class="login-box" style = "position:relative;z-index:1000; ">

  <!-- /.login-logo -->
  <div class="login-box-body" >
    <div class="login-logo">

      <b>Update Your Password </b>
    </div>
    <div id = "loginForm">
      <form method="post">
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="NewPassword" name="newpassword" >
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div><br>
        <div class="row container">

          <div class="col-xs-3" style = "margin-left: auto; margin-right: auto;">
            <button type="submit" class="btn btn-block btn-flat" name="resetpassword" style = "background-color:#005a4d; color:white;">Reset Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form> <br>

    </div>


  <!-- /.login-box-body -->
</div>
<script type="text/javascript">
  $(document).ready(function(){
      $("#forgotPass").hide("fast");

    $("#forgotPassword").click(function(){

        $("#forgotPass").show(1000);
        $("#loginForm").hide(1000);

    });
    $("#back").click(function(){
       $("#forgotPass").hide(1000);
        $("#loginForm").show(1000);


    });
});
</script>



<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
