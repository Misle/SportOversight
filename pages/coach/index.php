

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sports Oversights | Coach</title>
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
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="dist/css/custome.css">

  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header ">
    <!-- Logo -->
    <a href="index.html" class="logo">
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
          <p>Abebe Chala</p>
          <p><i>Coach</i> </p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h3>Menu</h3></li>
         <li class = "active"><a href="index.html"><i class="glyphicon glyphicon-user text-green"></i> <span>View Player Status</span></a></li>
         <li><a href="sendTransfer.php"><i class="glyphicon glyphicon-send text-blue"></i> <span>Send transfer Request</span></a></li>
         <li><a href="pickLineUp.php"><i class="glyphicon glyphicon-pencil text-green"></i> <span>Pick line Up</span></a></li>
         <li><a href="viewProfile.php"><i class="glyphicon glyphicon-user text-yellow"></i> <span>View Profile</span></a></li>
         <li><a href="../../login.php"><i class="glyphicon glyphicon-log-out text-red"></i> <span>LogOut</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Player Status
        <small>Buna players</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="row">
        <div class = "col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Players</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>

              </div>
            </div>
            <div class="box-body">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Player Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Status Avarage</th>
                    <th>Changes</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Abebe Molla</td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Challa Molla</td>
                      <td>25</td>
                      <td>MD</td>
                      <td>76</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Abebe Molla</td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Bekele Challa</td>
                      <td>24</td>
                      <td>CMD</td>
                      <td>59</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>John Doe/td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Alexander Pierce</td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Bob Doe</td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                    <tr>
                      <td>Mike Doe</td>
                      <td>22</td>
                      <td>GK</td>
                      <td>74.56</td>
                      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              List of players
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Update Status for Abebe Challa</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Basic Form</h3>
                    </div>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label class = "col-md-5">Long Shots:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Dribling:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Ball Control:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Penalities:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">GK Diving:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Stamina:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                        </div>

                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label class = "col-md-5">Short Pass:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Heading:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Marking:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Balance:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-5">Tackling:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->


                        </div>

                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Other Field</h3>
                    </div>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label class = "col-md-7">GK Kicking:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">GK Positioning:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">Crossing:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">GK Handling:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">GK Reflex:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label class = "col-md-7">Position Playing:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">Finishing:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">Long Pass:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">Current Form:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                          <div class="form-group">
                            <label class = "col-md-7">Sprint:</label>
                            <div class="input-group col-md-4" >
                              <input type="text" class="form-control" data-inputmask="'mask': ['99.9999']" data-mask>
                            </div>
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                  <form class = "form-horizontal">
                    <div class="row ">

                      <div class="col-md-6 ">

                      </div>

                      <div class="col-md-6">

                      </div>
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Top Players</h3>
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="glyphicon glyphicon-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Alemu Challa</span>
              <span class="info-box-number">74.2%</span>

              <div class="progress">
                <div class="progress-bar" style="width: 74.2%"></div>
              </div>
                  <span class="progress-description">
                    GK
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="glyphicon glyphicon-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jhon Doe</span>
              <span class="info-box-number">83.2%</span>

              <div class="progress">
                <div class="progress-bar" style="width: 83.2%"></div>
              </div>
                  <span class="progress-description">
                    CD
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="glyphicon glyphicon-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bekele Kebede</span>
              <span class="info-box-number">84.2%</span>

              <div class="progress">
                <div class="progress-bar" style="width: 84.2%"></div>
              </div>
                  <span class="progress-description">
                    CRA
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Players for Next Match</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>

              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Player Name</th>
                    <th>Position</th>
                    <th>Status Avarage</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Abebe Molla</td>
                      <td>GK</td>
                      <td>74.56</td>
                    </tr>
                    <tr>
                      <td>Challa Molla</td>
                      <td>MD</td>
                      <td>76</td>
                    </tr>
                    <tr>
                      <td>Jhone Doe</td>
                      <td>LMD</td>
                      <td>78.23</td>
                    </tr>
                    <tr>
                      <td>Abebe Lemma</td>
                      <td>CMD</td>
                      <td>86.9</td>
                    </tr>
                    <tr>
                      <td>Kebede Molla</td>
                      <td>RMD</td>
                      <td>82.1</td>
                    </tr>

                  </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="pickLineUp.html"> Click Here for Full Details</a>
            </div>
            <!-- /.box-footer-->
          </div>
        </div>
      </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2017-2018 SportsOversight</a>.</strong> All rights
    reserved.
  </footer>
  <script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../plugins/knob/jquery.knob.js"></script>





<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    $("#example1").DataTable();

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
