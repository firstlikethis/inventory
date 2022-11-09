<?php
    require('../../controller/config.php');
    $db = new db;
    $db->admin_empty();
    if(empty($_GET['id']))
    {
        $db->header2("./edit_product.php");
    }

    if(isset($_POST['submit']))
    {
        $name_product = $_POST['name_product'];
        $serial_number = $_POST['serial_number'];
        $ip_address = $_POST['ip_address'];
        $mac_address = $_POST['mac_address'];
        $boxlan = $_POST['boxlan'];
        $departments = $_POST['departments'];
        $name_users = $_POST['name_users'];
        $floors = $_POST['floors'];
        $remark = $_POST['remark'];
        $id = $_GET['id'];
        
        $check = $db->select_where("tb_product", "name_product = '$name_product'");
        if ($check->num_rows == 0) {
            $insert = $db->update('tb_product',"name_product='$name_product',serial_number='$serial_number',ip_address='$ip_address',mac_address='$mac_address',boxlan='$boxlan',departments='$departments',name_users='$name_users',floors='$floors',remark='$remark'","id_products='$id'");
            if($insert)
            {
                $db->alert('แก้ไขรายการครุภัณฑ์สำเร็จ');
                $db->header('../admin_panel.php');
            }
            else
            {
                $db->alert('เกิดข้อผิดพลาดในการแก้ไขรายการครุภัณฑ์!');
                $db->header('edit_product.php');
            }
        }else
        {
            $db->alert('คอลัมน์ซ้ำบางรายการ');
        }
    }

    $id = $_GET['id'];
    $se_product = $db->select_where('tb_product',"id_products = '$id'");
    $product = $se_product->fetch_assoc();
    
?>

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
                                    <input type="text" class="form-control" id="name_product" value="<?php echo $product['name_product'];?>" name="name_product" 
                                        placeholder="ใส่ชื่อคอมฯ">
                                </div>
                                <div class="form-group">
                                    <label for="serial_number">Serial Number</label>
                                    <input type="text" class="form-control" value="<?php echo $product['serial_number'];?>" id="serial_number" name="serial_number"
                                        placeholder="ใส่ Serial Number">
                                </div>
                                <div class="form-group">
                                    <label for="ip_address">IP Address</label>
                                    <input type="text" class="form-control" value="<?php echo $product['ip_address'];?>" id="ip_address" name="ip_address"
                                        placeholder="ใส่ IP Address">
                                </div>
                                <div class="form-group">
                                    <label for="mac_address">Mac Address</label>
                                    <input type="text" class="form-control" value="<?php echo $product['mac_address'];?>" id="mac_address" name="mac_address"
                                        placeholder="ใส่ Mac Address">
                                </div>
                                <div class="form-group">
                                    <label for="boxlan">boxlan</label>
                                    <input type="text" class="form-control" value="<?php echo $product['boxlan'];?>" name="boxlan" id="boxlan"
                                        placeholder="ใส่ BOX LAN">
                                </div>
                                <div class="form-group">
                                    <label for="departments">ฝ่ายงาน</label>
                                    <input type="text" class="form-control" value="<?php echo $product['departments'];?>" id="departments" name="departments"
                                        placeholder="ใส่ชื่อฝ่ายงาน">
                                </div>
                                <div class="form-group">
                                    <label for="name_users">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" value="<?php echo $product['name_users'];?>" id="name_users" name="name_users"
                                        placeholder="ชื่อผู้ใช้งาน">
                                </div>
                                <div class="form-group">
                                    <label for="floors">ชั้น</label>
                                    <input type="text" class="form-control" value="<?php echo $product['floors'];?>" id="floors" name="floors"
                                        placeholder="ใส่ชั้น">
                                </div>
                                <div class="form-group">
                                    <label for="remark">หมายเหตุ</label>
                                    <input type="text" class="form-control" value="<?php echo $product['remark'];?>" id="remark" name="remark"
                                        placeholder="เพิ่มหมายเหตุ">
                                </div>

                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" id="submit"
                                        class="btn btn-light btn-round px-5"><i class="icon-lock"></i> บันทึก</button>
                                    <button class="btn btn-light btn-round px-5"><a
                                            href="../../admin_dashboard/admin_panel.php">กลับหน้าหลัก</a>
                                    </button>
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