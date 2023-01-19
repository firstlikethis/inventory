<?php
require('../../controller/config.php');
$db = new db;
$db->admin_empty();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>

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

    <style>
        .button-but{
            display: flex;
            /* border: 1px solid red; */
            justify-content: right;


            padding-right:1%;
            padding-top:1%;
            /* align-items:center; */
            padding-bottom: 0.1%;
        }
    </style>
</head>

<body class="bg-theme bg-theme1">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="button-but">
                    <button class="btn btn-light btn-round px-5"><a href="../../admin_dashboard/admin_panel.php"><i
                                class="icon-lock"></i>กลับหน้าหลัก</a>
                    </button>
                </div>
                <div class="card-header text-center">
                    Product
                </div>

                <div class="table-responsive text-center">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Com Name</th>
                                <th>S/N</th>
                                <th>Ip Address</th>
                                <th>Mac Address</th>
                                <th>BoxLan</th>
                                <th>Department</th>
                                <th>User</th>
                                <th>Floor</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $se_product = $db->select('tb_product');
                            while ($product = $se_product->fetch_assoc()) {
                            $idm = $product['id_products'];
                        ?>
                        <tr class="text-center">
                            <td><?php echo $product['name_product']; ?></td>
                            <td><?php echo $product['serial_number']; ?></td>
                            <td><?php echo $product['ip_address']; ?></td>
                            <td><?php echo $product['mac_address']; ?></td>
                            <td><?php echo $product['boxlan']; ?></td>
                            <td><?php echo $product['departments']; ?></td>
                            <td><?php echo $product['name_users']; ?></td>
                            <td><?php echo $product['floors']; ?></td>
                            <td><?php echo $product['remark']; ?></td>
                            <td>
                                <a href="./template/edit_product.php?id=<?php echo $product['id_products']; ?>"
                                    class="btn btn-light btn-round px-1">แก้ไขครุภัณฑ์</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->
    <!--End Row-->
    <?php
        include('../admin_includes/togglebar.php');
        include('../admin_includes/script.php');
            ?>
</body>

</html>