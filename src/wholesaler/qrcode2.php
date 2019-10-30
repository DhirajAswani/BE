
<!-- SELECT * FROM wholesaler_order,manufacturer,product,wholesaler where wholesaler_order.manufacturer_id=manufacturer.uid and wholesaler_order.status=0 and wholesaler_order.manufacturer_id=1 and wholesaler_order.product_id=product.product_id and wholesaler_order.wholesaler_id=wholesaler.uid and user.uid=wholesaler_order.wholesaler_id and user.uid=wholesaler.uid -->
<?php
    require_once('../db.php');
   
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

   
    <head>
        <meta charset="utf-8" />
        <title>Quick ERP | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../vendors/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../vendors/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../vendors/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../vendors/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../vendors/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../vendors/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.png" />

        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../vendors/layouts/layout/img/logo.png" alt="logo" class="logo-default" /></a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-exclamation-triangle"></i>
                                <span class="badge badge-default"> 7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                        <span class="bold">12 Products</span> under EOQ</h3>
                                    <a href="#">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 Left</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> RAM </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">1 Left</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Mouse </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">0 Left</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Keyboard </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">2 Left</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Monitor </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->

                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="vendors/layouts/layout/img/avatar3_small.jpg" />
                                <span class="username username-hide-on-mobile"> User Name </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings </a>
                                </li>
                                <li>
                                    <a href="index.php?logout=true">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->

                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
           <?php
                require_once('sidebar.php');

           ?>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Approved Orders</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Approved Orders
                        <small>Check & Authenticate</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">

                        <div class="row">
                            <div class="col-md-8" style = "margin-left : 8%" >
                                <div class="table-responsive">
                                
                                <video id="preview"></video>

                                </div> 
                                <div class="col-md-4">

                                    <h3 id="count"></h3>
                                    <h3>QR Codes Scanned</h3>
                                </div>
                            </div>
                        </div>

                    
                        
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; by Students of Study Link.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <script>
        var hashes="";
        var hasharr="";
        var total;
        $(document).ready(function (){
            var url=$(location).attr("href");
            var urlarray=url.split("?");
            var splitmeagain=urlarray[1];
            var orderid=splitmeagain.split("=");
            orderid=orderid[1];
            
            $.ajax({ 
               type: "POST", 
               url: "fetch.php", 
               data: { orderId : orderid}, 
               success: function(ans) {
                        hashes=JSON.parse(ans);
                        // JSON.stringify(hashes);
                        //console.log(hashes['hashdata']);
                        hasharr=(hashes['hashdata']).toString();
                        total=hashes['product_quantity'];
                      console.log(hasharr); 
                     } 
                });
        //         var arr=hasharr.split(",");
        // console.log(arr); 
        });
        
        
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );

        // var content_array = [];
       // console.log(hashes.hashdata);
       var count=0;
        scanner.addListener('scan', function(content) {
            
            //alert('showing content : ' + content);
            if(hasharr.indexOf(content)!=-1)
            {

                hasharr.replace(content,"");
                console.log(hasharr);
                alert("Authenticated!!");
                count++;
                document.getElementById("count").innerHTML=count;
                if(count==total)
                {
                    alert("All hash have been matched!!")
                }
            }else{
                alert("Fraud QR Code!!!!!!");
            }
            // window.open(content, "_blank");
        });
        console.log(hasharr);
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("camer not working!");
            }
        });
    </script>
        <!-- BEGIN CORE PLUGINS -->
        <script src="../vendors/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../vendors/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../vendors/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../vendors/pages/scripts/dashboard.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../vendors/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../vendors/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--BEGIN CUSTOM SCRIPT LOADING-->
        <script src="../vendors/pages/scripts/custom.js" type="text/javascript"></script>
        <!--END OF CUSTOM SCRIPT LOADING-->
    </body>

</html>