<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header text-center">Product
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="./template/add_product.php">Add New</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
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
                                <a href="./template/edit_product.php?id=<?php echo $product['id_products']; ?>" class="btn btn-light btn-round px-1">แก้ไขครุภัณฑ์</a>
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