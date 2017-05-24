<!DOCTYPE html>
<html>

<?php

;?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mobile Learning Animals Report | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"></strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">

                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

              <li class="active">

                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/contacts">Contacts</a></li>
                        <li><a href="/staff_reg">Staff Registration</a></li>
                    </ul>

                </li>

                <li>

                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Performance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/performance">Student Performance</a></li>
                    </ul>

                </li>

                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Access Frequency</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/access">Access Frequency</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Mobile Learning Animals Report.</span>
                </li>




                <li>
                    <a href="/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>






            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Registration Form <small>New Form.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>



                            </div>
                        </div>


                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="staff_reg">

                            <div class="form-group"><label class="col-sm-2 control-label">Date</label>

                                    <div class="col-sm-2"><input type="date" class="form-control" name="date"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Staff ID</label>

                                    <div class="col-sm-2"><input type="text" class="form-control" name="staffid"></div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Full Name</label>

                                    <div class="col-sm-5"><input type="text" class="form-control" name="fullname">
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">NRIC</label>

                                    <div class="col-sm-5"><input type="text" class="form-control" name="nric" ></div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label">Birthday</label>

                                    <div class="col-sm-5"><input type="text"  class="form-control" name="birthday"></div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Age</label>

                                    <div class="col-lg-5"><input type="text" class="form-control" name="age"></div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Gender</label>

                                    <div class="col-lg-5"><input type="text" name="gender" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-lg-2 control-label">Address</label>

                                    <div class="col-lg-5"><input type="text" name="address" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Phone Number</label>

                                    <div class="col-lg-5"><input type="text" name="phoneNumber" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">E-Mail</label>

                                    <div class="col-lg-5"><input type="text" name="email" class="form-control">
                                    </div>
                                </div>




                               </div>


                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
