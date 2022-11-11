<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <title>Admin Dashboard</title>
    <!-- loader-->
    <link href="../../lib/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../../lib/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../../lib/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../../lib/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../../lib/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../../lib/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../../lib/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href=".././lib/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../../lib/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../../lib/assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

   <?php include('./sidebar.php');?>

<!--Start topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    
    <div class="mt-3">
      <div id='calendar'></div>
    </div>
			
		<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->	
			
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   
  <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	
	<?php include('./togglebar.php');?>
   
  </div><!--End wrapper-->


  <?php
    include('./script.php');
    
  ?>
</body>
</html>
