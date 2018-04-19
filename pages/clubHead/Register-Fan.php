<?php

session_start();
if ($_SESSION['userName'] == "") {

  header('Location: ../../index.php');

}




?>





<!DOCTYPE html>




<html>




<style>

#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: green; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    top: 30px; /* 30px from the bottom */
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
    from {top: 0; opacity: 0;}
    to {top: 100px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 100px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from top: 100px; opacity: 1;}
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from top: 100px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sports Oversights | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../dist/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="../../dist/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/jQueryUI/jquery-ui.css">
  <!-- Font Awesome -->
  <link href="../../dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- Custome style -->
  <link rel="stylesheet" href="dist/css/custome.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../../dist/js/jquery-2.2.3.min.js"></script>

<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
</head>

<?php
  if (isset($_POST["registerFan"])) {
    # code...
    include "register_fan_back_end.php";
  registerFan();
  }
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header ">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>O</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sports</b> Oversights</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top skin-black-light">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" id = "menu">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "Hello". " ".$_SESSION['userName']?></p>

          <p><i>Club Head</i> </p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h3>Menu</h3></li>
        <li>
          <a href="index">
            <i class="glyphicon glyphicon-inbox text-green"></i>
            <span>Request Notification</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php
              $num = 3;
echo $num;
              ?></span>
            </span>
          </a>
        </li>


        <li ><a href="assign_coach"><i class="glyphicon glyphicon-user text-blue"></i> <span>Request Coach</span></a></li>
        <li ><a href="assign_scouter"><i class="glyphicon glyphicon-user text-blue"></i> <span>Request Scouter</span></a></li>
         <li><a href="viewProfile"><i class="glyphicon glyphicon-user text-yellow"></i> <span>View Profile</span></a></li>
         <li class="active"><a href="Register-Fan"><i class="glyphicon glyphicon-user text-yellow"></i> <span>Register-Fan</span></a></li>
         <li><a href="logout"><i class="glyphicon glyphicon-log-out text-red"></i> <span>LogOut</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Register Fan

      </h1>
    </section><br>
  <!-- Main content -->
    <section class="content">
      <form method = 'post' >

        <div class="row" id = "part1">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Personal Information-->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Personal Information</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="firstname" required="required" placeholder="First Name">
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="lastname" required="required" placeholder="Last Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">User Name <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="username" required="required" placeholder="User Name">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="email" required="required" placeholder="Email">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="phoneno" class="col-sm-3 control-label">Phone No <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="phoneno" required="required" placeholder="Phone No">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="startdate" class="col-sm-3 control-label">Date Of Birth <span class="required" style = "color :red"> *</span></label>
                    <div class="col-sm-7">
                      <input type="date"  class="form-control" id="" data-validate-length-range="1" data-validate-words="1" name="dateofbirth" required="required" placeholder="Date Of Birth">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="nationality" class="col-md-3 control-label">Nationality <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-8">
                        <div class="form-group">
                          <select class="form-control select2" id="inputid" data-validate-length-range="1" data-validate-words="1" name="nationality" required="required" placeholder="Nationality">
                            <option>Canada</option>
                            <option>Ethiopia</option>
                            <option>Eriteria</option>
                            <option>India</option>
                            <option>Keniya</option>
                            <option>Sudan</option>
                          </select>
                        </div>
                    </div>
                  </div>

                 <!--  <div class="form-group">
                    <label for="ocupation" class="col-sm-3 control-label">Occupation </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="occupation"  placeholder="Occupation">
                    </div>
                  </div> -->

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender <span class="required" style = "color :red"> *</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>Male:
                        <input type="radio" class="flat " name="gender" id="genderM" value="Male" checked="" required /> &#160;&#160;&#160;&#160;&#160;
                        Female :
                        <input type="radio" class="flat" name="gender" id="genderF" value="Female" /><br>
                      </p>
                    </div>
                  </div>

                 <!--  <div class="item form-group">
                    <label class="control-label col-md-3" for="maritalstatus">Marital Status <span class="required" style = "color :red"> *     </span></label>
                    <div class="col-md-9">
                      <p>Married:
                        <input type="radio" class="flat" name="maritalStatus" id="genderM" value="Married" required /> &#160;&#160;&#160;&#160;&#160;
                        Single :
                        <input type="radio" class="flat" name="maritalStatus" id="single" value="Single" checked="" /><br>
                        Divorced :
                        <input type="radio" class="flat" name="maritalStatus" id="divorced" value="Divorced" /><br>
                        Widow :
                        <input type="radio" class="flat" name="maritalStatus" id="widow" value="Widow" /><br>
                      </p>
                    </div>
                  </div> -->

            <div class="box">
              <div class="box-header">
                <h4 class="box-title">Address</h4>
              </div>
                  <div class="form-horizontal form-label-left input_mask">
                    <div class="item form-group">
                      <label class="control-label col-sm-3" for="kebele">Kebele  </label>
                      <div class="col-md-3 ">
                        <input id="kebele" class="form-control" data-validate-length-range="2" data-validate-words="1" name="kebele" placeholder = "Kebele" type="text">
                      </div>

                      <label class="control-label col-sm-2 " for="wereda">Wereda </label>
                      <div class="col-md-3 ">
                        <input id="wereda" class="form-control" data-validate-length-range="2" data-validate-words="1" name="wereda"placeholder = "Wereda" type="text">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                  </div>

                  <div class="form-horizontal form-label-left input_mask">
                    <div class="item form-group">
                      <label class="control-label col-sm-3" for="Houseno">House No </label>
                      <div class="col-md-3 ">
                        <input id="houseno" class="form-control" data-validate-length-range="2" data-validate-words="1" name="houseno" placeholder = "House No" type="text">
                      </div>

                      <label class="control-label col-sm-2 " for="city">City </label>
                      <div class="col-md-3 ">
                        <input id="city" class="form-control" data-validate-length-range="2" data-validate-words="1" name="city" placeholder = "City" type="text">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                  </div>
                  </div>


                      <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Fan Status</h3>

                            </div>
                            <br>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                 <div class="item form-group">
                                  <label class="control-label col-md-3" for="service">Membership Level</label>
                                  <div class="col-md-8">


                                     <select class="form-control select2 col-md-6" data-placeholder="Membership Level" style="width: 100%;" name  = "Membership_Level">
                                      <option>Platinum-Level</option>
                                      <option>Gold-Level</option>
                                      <option>Silver-Level</option>
                                      <option>Brozne-Level</option>

                                    </select>
                                  </div>
                                </div><br><br>
                              <br><br>


                              <div class="box-body no-padding">
                                   <div class="item form-group">
                                    <label class="control-label col-md-3" for="Club_ID">Club_ID</label>
                                    <div class="col-md-8">

  <input type="number"  data-validate-length-range="2" data-validate-words="1"  class="form-control" id="" data-validate-length-range="1" data-validate-words="1" name="Club_ID" required="required" placeholder="Club_ID">

                                    </div>
                                  </div><br><br>
                                <br><br>

                              </div>









                            </div>


                            <!-- /.box-body -->
                        </div>
                </div>
                <hr>

                  <!-- <div class="item form-group">
                    <label class="control-label col-md-3" for="timket">Korabi Abal  <span class="required" style = "color :red"> *     </span></label>
                    <div class="col-md-9">
                      <p>Yes:
                        <input type="radio" class="flat" name="korabi" id="korabi" value="Yes" checked="" required /> &#160;&#160;&#160;&#160;&#160;
                        No :
                        <input type="radio" class="flat" name="korabi" id="korabi" value="No" /><br>
                      </p>
                    </div>
                  </div> -->
                  <br><br><br>
              </div>
            </div>
            <!-- /.box -->





          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add Members Picture</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->

              <div class="box-body">
                <div class="">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <center>
                    <img class="img" src="../../dist/img/user.png" alt="User Avatar">
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Picture</label><br><br>
                      <input type="file" class = "" id="exampleInputFile">
                    </div>
                  </center>
                  <!-- /.row -->
                </div>

              </div>
            </div>



          </div>
          <!--/.col (right) -->
           <div class = "col-md-4">
            <center>
              <input type = "submit" value = "Register" class="btn bg-olive btn-flat" style = "width:200px; height:40px; font-size:18px;" id ="sub" name = "registerFan">
            </center>
          </div>
        </div>





        </div>
      </form>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2017-2018 Sport's Oversight</a>.</strong> All rights
    reserved.
  </footer>

  <script>
        $(function() {
            $( "#datepicker-10" ).datepicker({
              showWeek:true,
              yearSuffix:"-CE",
              showAnim: "slide"
            });
        });
        $(function() {
            $( "#datepicker-11" ).datepicker({
              showWeek:true,
              showDay:true,
              yearSuffix:"-CE",
              showAnim: "slide"
            });
        });
         $(function() {
            $( "#datepicker-12" ).datepicker({
              showWeek:true,
              showDay:true,
              yearSuffix:"-CE",
              showAnim: "slide"
            });
        });
          $(function() {
            $( "#datepicker-13" ).datepicker({
              showWeek:true,
              showDay:true,
              yearSuffix:"-CE",
              showAnim: "slide"
            });
        });
  </script>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../plugins/jQueryUI/jquery-ui.min.js"></script>
<script src="../../lugins/sparkline/jquery.sparkline.min.js"></script>

<!-- jQuery 2.2.3 -->
<script src="../../dist/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/moment.min.js"></script>






<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
