<?php
session_start();
require_once ('utils/utility.php');
$user = validateToken();
if ($user != null) {
    header('Location: a.php');
    die();
}
require_once ('form-login.php');
 ?>
<!DOCTYPE html>
<head>
    <title>Đăng nhập</title>
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
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card my-5">
                    <div class="card-body p-0">                       
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-black-900 mb-4">Đăng nhập</h1>
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="usr" 
                                                placeholder="Nhập tên đăng Nhập" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="pwd" placeholder="Nhập mật khẩu" name="password">
                                        </div>
                                        <button class="btn btn-primary btn-block">
                                            Login
                                        </button>     
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="#" href="#">Quên mật khẩu?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="#" href="register.php">Đăng kí tài khoản!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>