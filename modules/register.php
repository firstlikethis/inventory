<?php
    include('../includes/head.php');
    require('../controller/config.php');
    $db = new db;
    $db->id_not();

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $password = $db->encode($_POST['password']);['password'];
        $tel = $_POST['tel'];

        $check = $db->select_where("tb_members","firstname = '$firstname'");
        if($check->num_rows == 0)
        {
            $insert = $db->insert("tb_members","firstname,lastname,department,email,password,tel","'$firstname','$lastname','$department','$email','$password','$tel'");
            if($insert)
            {
                $db->alert("สมัครสมาชิกเสร็จสิ้น!");
                $db->header("../index.php");
            }
            else
            {
                $db->alert("เกิดข้อผิดพลาดในการสมัครสมาชิก!");
                $db->header("register.php");
            }
        }
        else
        {
            $db->alert("ชื่อผู้ใช้ ถูกใช้งานแล้ว!");
        }
    }

    
?>


<body class="img js-fullheight" style="background-image: url(../lib/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SLF Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

                        <form method="post" class="signin-form">

                            <div class="form-group">
                                <input type="text" id="firstname" name="firstname" class="form-control"
                                    placeholder="ชื่อ" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="lastname" name="lastname" class="form-control"
                                    placeholder="นามสกุล" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="department" name="department" placeholder="ฝ่ายงาน"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="อีเมล"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" id="password" name="password" pattern=".{8,}"
                                    type="password" class="form-control" placeholder="รหัสผ่าน" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tel" name="tel" pattern="[0-9]{10}"
                                    placeholder="เบอร์โทรศัพท์" required>
                            </div>
                            <br>
                            <input type="submit" name="submit" class="form-control btn btn-primary submit px-3"
                                onclick="return confirm('คุณต้องการที่จะสมัครสมาชิก ใช่หรือไม่?'); "
                                value="สมัครสมาชิก">

                        </form>
                        <br>
                            <div>
                                <a href="../index.php"><button type="submit"
                                        class="form-control btn btn-primary submit px-3">กลับหน้าหลัก</button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </html>