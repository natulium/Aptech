<?php
session_start();
require_once ('utils/utility.php');
$user = validateToken();
if ($user != null) {
    header('Location: a.php');
    die();
}
require_once ('form-register.php');
 ?>
<!DOCTYPE html>
<head>
    <title>Đăng kí</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-black-900 mb-4">Đăng ký tài khoản</h1>
                            </div>
                             <form method="POST" id="RegisterForm">
                                <div class="form-group">
                                     <label for="usr"><b>Tên đăng nhập:</b></label>
                                     <input required="true" type="text" class="form-control" id="usr" name="username" pattern="[a-zA-Z0-9]{3,}">
                                </div>
                                <div class="form-group">
                                     <label for="email"><b>Email:</b></label>
                                     <input required="true" type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd"><b>Mật khẩu:</b></label>
                                    <input required="true" type="password" class="form-control" id="pwd" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmation_pwd"><b>Nhập lại mật khẩu:</b></label>
                                     <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
                                </div>
                                <div class="form-group">
                                    <label for="fullname"><b>Họ và tên</b></label>
                                    <input required="true" type="text" class="form-control" name="fullname"> 
                                </div>
                                <div class="form-group">
                                    <label for="phone"><b>Số điện thoại</b></label>
                                    <input required="true" type="text" class="form-control" name="phone"> 
                                </div>
                                <div class="form-group">
                                    <label for="address"><b>Địa chỉ</b></label>
                                    <input required="true" type="text" class="form-control" name="address"> 
                                </div>
                                <div class="form-group">
                                    <label for="birthday"><b>Ngày sinh</b></label>
                                    <input required="true" type="date" class="form-control" name="birthday"> 
                                </div>
                                <div class="form-group">
                                    <label for="gender"><b>Giới tính</b></label>
                                    <input required="true" type="text" class="form-control" name="gender"> 
                                </div>
                                <div class="text-center">
                                <button class="btn btn-success" style="">Đăng ký</button>
                                </div>
                            </form>
                                <hr>
                                <div class="text-center">
                                    <a class="" href="#">Quên mật khẩu?</a>
                                </div>
                                <div class="text-center">
                                    <a class="" href="login.php">Đã có tài khoản? Đăng nhập</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(function() {
        $('#RegisterForm').submit(function() {
            if($('[name=password]').val() != $('[name=confirmation_pwd]').val()) {
                alert('Mật khẩu xác nhận không khớp!!!')
                return false;
            }
            return true;
        })
    })
</script>

</body>

</html>