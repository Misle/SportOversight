<?php

session_start();
if ($_SESSION['userName'] == "") {

  header('Location: ../../index');

}




?>


<!DOCTYPE html>
<html>
<style>
#match_added_succesfully {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #005a4d; /*green background color */
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
#match_added_succesfully.show {
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
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
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
  if (isset($_POST["addMatch"])) {
    # code...
    include "add_match_backend.php";

   add_Match();
  }
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header ">
    <!-- Logo -->
    <a href="index" class="logo">
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
          <p><?php echo "Hello"." ".$_SESSION['userName']; ?></p>

          <p><i>Admin</i> </p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h3>Menu</h3></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil text-green"></i> <span>Register Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu active">

            <li ><a href="Register coach" ><i class="fa fa-circle-o "></i> Register Coach</a></li>
            <li ><a href="Register player" ><i class="fa fa-circle-o "></i>  Register Player</a></li>
            <li><a href="Register scouter"><i class="fa fa-circle-o"></i>  Register Scouter</a></li>
            <li><a href="Register commentator"><i class="fa fa-circle-o"></i>  Register Commentator</a></li>
            <li ><a href="Register club owner" ><i class="fa fa-circle-o "></i> Register ClubOwner</a></li>
          </ul>
        </li>
          
        <li class = "active"><a href="add_match"><i class="glyphicon glyphicon-plus text-blue"></i> <span>Add Match</span></a></li>
        <li><a href="add_playerToVote"><i class="glyphicon glyphicon-user text-yellow"></i> <span>Add player for vote</span></a></li>
        <li><a href="viewProfile"><i class="glyphicon glyphicon-user text-yellow"></i> <span>View Profile</span></a></li>
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
       Add Match 
        <small>sportsoversight</small>
      </h1>
    </section><br>
  <!-- Main content -->
    <section class="content">
      <form method = 'post' action = "">
        <div class="row content box" style = "width:80%;">
          <div class="col-md-5" >
            <h2>Match Detail</h2>
            <hr>
            <div class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                    <label for="nationality" class="col-md-4 control-label">Club <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-8">
                        <div class="form-group">
                           <select class="selectClass form-control " name = "club1">
                             <?php
                              $conn = mysqli_connect('localhost','root','','sportsoversight');
                              $sql1 = "SELECT * FROM `club`";
                              $result1 = mysqli_query($conn, $sql1);
                              while ($row1 = mysqli_fetch_array($result1)){
                                ?>
                                <option value = "<?php echo $row1['club_ID'];?>"><?php echo $row1['club_Name']; $row1['club_ID']?></option>
                                <?php
                              }
                            ?>
                        </select>
                          
                        </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="startdate" class="col-sm-4 control-label">Match Day <span class="required" style = "color :red"> *</span></label>
                    <div class="col-sm-7">
                      <input type="date"  class="form-control" id="" data-validate-length-range="1" data-validate-words="1" name="matchDay" required="required" placeholder="Date Of Birth">
                    </div>
                  </div><br>
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label  class="col-sm-4 control-label">Match Time:</label>

                      <div class="input-group col-sm-7">
                        <input type="time" class="form-control " name = "matchTime">

                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-1"  ><br><br><br><br> <br><b style = "font-size:30px;">Vs</b></div>
          <div class="col-md-6"  ><br><br><br><br><br>
            
            <div class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                    <label for="nationality" class="col-md-3 control-label">Club <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-8">
                        <div class="form-group">
                          <select class="selectClass form-control" name = "club2">
                             <?php
                              $conn = mysqli_connect('localhost','root','','sportsoversight');
                              $sql1 = "SELECT * FROM `club`";
                              $result1 = mysqli_query($conn, $sql1);
                              while ($row1 = mysqli_fetch_array($result1)){
                                ?>
                                <option value = "<?php echo $row1['club_ID'];?>"><?php echo $row1['club_Name'];?></option>
                                <?php
                              }
                            ?>
                        </select>
                          
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Place <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputid" data-validate-length-range="1" data-validate-words="1" name="Place" required="required" placeholder="Place">
                    </div>
                  </div><br>
                  <div class="form-group">
                    <label for="nationality" class="col-md-4 control-label">Commentator <span class="required" style = "color :red"> *</span></label>

                    <div class="col-sm-8">
                        <div class="form-group">
                          <select class="form-control select2" id="inputid" data-validate-length-range="1" data-validate-words="1" name="comentator" required="required" placeholder="Comentator">
                            <?php
                              $conn = mysqli_connect('localhost','root','','sportsoversight');
                              $sql2 = "SELECT * FROM `commentator`";
                              $result2 = mysqli_query($conn, $sql2);
                              while ($row2 = mysqli_fetch_array($result2)){
                                ?>
                                <option value = "<?php echo $row2['account_ID'];?>"><?php echo $row2['first_Name'].' '. $row2['last_Name'];?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                    </div>
                  </div>
                  <br><br>
                  <div class = "col-md-4" style ="margin-left:20%;">
                      <input type = "submit" value = "Add Match" class="btn bg-olive btn-flat" style = "width:200px; height:40px; font-size:18px;" id ="sub" name = "addMatch">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </form>
    </section>
 

<script type="text/javascript" language="javascript">
$(".selectClass").change(function () {
    $("select option").prop("disabled", false);
    $(".selectClass").not($(this)).find("option[value='" + $(this).val() + "']").prop("disabled", true);

});</script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2017-2018 Sports Oversight</a>.</strong> All rights
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
