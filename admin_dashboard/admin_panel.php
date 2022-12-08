<?php
    require('../controller/config.php');
    $db = new db;
    $db->admin_empty();
    include('./admin_includes/head.php');
    if(isset($_GET['act'])){
        if($_GET['act']== 'excel'){
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=export.xls");
            header("Pragma: no-cache");
            header("Expires: 0");
        }
    }
?>

<body class="bg-theme bg-theme1">
    <?php 
      include('./admin_includes/nav.php');
      include('./admin_includes/topbar.php');
    ?>
    <div class="clearfix">
        <div class="content-wrapper">
            <div class="container-fluid">
                <!--Start Dashboard Content-->
                <?php
                  include('./admin_includes/content1.php');
                  include('./admin_includes/sitetraffic.php');
                  include('./admin_includes/weeklychart.php');
                  include('./admin_includes/table.php');
                  include('./admin_includes/togglebar.php');
                  include('./admin_includes/script.php');
                ?>
            </div>
        </div>
    </div>
    <!--End wrapper-->
</body>

</html>