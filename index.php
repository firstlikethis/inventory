<?php
    require('controller/config.php');
    $db = new db;
    $db->id_not();


    if(isset($_POST['submit']))
    {
        $email = $db->conn->real_escape_string($_POST['email']);
        $password = $db->conn->real_escape_string($db->encode($_POST['password']));
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date("Y-m-d H:m:s");
        $sql = "SELECT * FROM tb_members WHERE email=? AND password=?";
        $prepare = $db->conn->prepare($sql);
        $prepare->bind_param('ss',$email,$password);
        $prepare->execute();
        $result_user = $prepare->get_result();

        if($result_user->num_rows == 1)
        {
            $user = $result_user->fetch_assoc();
            $_SESSION['id'] = $user['id_member'];
            $_SESSION['status'] = $user['status'];
            $id_member = $user['id_member'];
            $db->alert("เข้าสู่ระบบเสร็จสิ้น!");
            if($user['status'] == "admin")
            {
                $db->header("./admin_dashboard/admin_panel.php");
            }
            else
            {
                $db->header("./low_levels/user.php");
            }
            $db->update("tb_members","ip='$ip',login_last='$date'","id_member = '$id_member'");
        }
        else
        {
            $db->alert("ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง!");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="lib/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(lib/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SLF Inventory It</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        
                        <form action="" method="post" class="signin-form">
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="ชื่อผู้ใช้" required>
                            </div>
                            
                            <div class="form-group">
                                <input id="password" name="password"  type="password" class="form-control" placeholder="รหัสผ่าน"
                                    required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" target="_blank" class="form-control btn btn-primary submit px-3" value="เข้าสู่ระบบ">
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">จดจำรหัสผ่าน
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="./modules/register.php" target="_blank" style="color: #fff">สมัครสมาชิก</a>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </html>