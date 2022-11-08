<?php
    require('../../controller/config.php');
    $db = new db;
    $db->admin_empty();

    if(isset($_POST['add']))
    {
        $np= $_POST['name_product'];
        $sn= $_POST['serial_number'];
        $ip= $_POST['ip_address'];
        $mc= $_POST['mac_address'];
        $bl= $_POST['boxlan'];
        $dm= $_POST['departments'];
        $nu= $_POST['name_users'];
        $fl= $_POST['floors'];
        $rm= $_POST['remark'];
        
        // ('tb_products','name_product','serial_number','ip_address','mac_address','boxlan','departments','name_users','floors','remark',"'$np','$sn','$ip','$mc','$bl','$dm','$nu','$fl','$rm'")
        $insert = $db->insert('tb_product','name_product','serial_number','ip_address','mac_address','boxlan','departments','name_users','floors','remark',"'$np','$sn','$ip','$mc','$bl','$dm','$nu','$fl','$rm'");
        if($insert)        
        {
            $db->alert('เพิ่มรายการสินค้าสำเร็จ');
            $db->header('add_product.php');
        }
        else
        {
            $db->alert('เกิดข้อผิดพลาดในการเพิ่มรายการสินค้า!');
            $db->header('add_product.php');
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard</title>
    <!-- loader-->
    <link href="../../lib/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../../lib/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
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
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center"><i class="ri-home-4-line">
                                    <h4>เพิ่มครุภัณฑ์</h4>
                                </i></div>
                            <hr>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name_product">ชื่อคอมฯ</label>
                                    <input type="text" class="form-control" id="name_product" name="name_product"
                                        placeholder="ใส่ชื่อคอมฯ">
                                </div>
                                <div class="form-group">
                                    <label for="serial_number">Serial Number</label>
                                    <input type="text" class="form-control" id="serial_number" name="serial_number"
                                        placeholder="ใส่ Serial Number">
                                </div>
                                <div class="form-group">
                                    <label for="ip_address">IP Address</label>
                                    <input type="text" class="form-control" id="ip_address" name="ip_address"
                                        placeholder="ใส่ IP Address">
                                </div>
                                <div class="form-group">
                                    <label for="mac_address">Mac Address</label>
                                    <input type="text" class="form-control" id="mac_address" name="mac_address"
                                        placeholder="ใส่ Mac Address">
                                </div>
                                <div class="form-group">
                                    <label for="boxlan">boxlan</label>
                                    <input type="text" class="form-control" id="boxlan" placeholder="ใส่ BOX LAN">
                                </div>
                                <div class="form-group">
                                    <label for="departments">ฝ่ายงาน</label>
                                    <input type="text" class="form-control" id="departments" name="departments"
                                        placeholder="ใส่ชื่อฝ่ายงาน">
                                </div>
                                <div class="form-group">
                                    <label for="name_user">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" id="name_user" name="name_user"
                                        placeholder="ชื่อผู้ใช้งาน">
                                </div>
                                <div class="form-group">
                                    <label for="floors">ชั้น</label>
                                    <input type="text" class="form-control" id="floors" name="floors"
                                        placeholder="ใส่ชั้น">
                                </div>
                                <div class="form-group">
                                    <label for="remark">หมายเหตุ</label>
                                    <input type="text" class="form-control" id="remark" name="remark"
                                        placeholder="เพิ่มหมายเหตุ">
                                </div>

                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="add" id="add" class="btn btn-light btn-round px-5"><i
                                            class="icon-lock"></i> Register</button>
                                    <a href="../../admin_dashboard/admin_panel.php"
                                        class="btn btn-light px-5">กลับหน้าหลัก</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Row-->
    <?php
                include('.././admin_includes/script.php');
            ?>
</body>

</html>