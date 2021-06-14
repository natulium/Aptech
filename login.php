<?php include_once('layouts/header.php');
?>
<link rel="stylesheet" type="text/css" href="login.css">
<div>
<form action="#" method="post">
    <div class="container">
        <label for="uname"><b>Tên Đăng Nhập</b></label>
        <input type="text" placeholder="Nhập tên đăng nhập" name="uname" required>

        <label for="uname"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập tên đăng nhập" name="uname" required>
        <div class="login">
        <button class="login-btn" type="submit">Đăng Nhập</button>
        <button class="signup-btn"onclick="document.getElementById('id01').style.display='block'">Đăng Ký</button>
        </div>
    <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </div>
</form>
</div>

<div id="id01" class="modal">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
    <form class="modal-content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="uname"><b>Tên Đăng nhập</b></label>
        <input type="text" placeholder="Nhập tên đăng nhập" name="email" required>

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

        <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
        <input type="password" placeholder="Nhập lại mật khẩu" name="psw-repeat" required>

        <label for="name"><b>Họ và tên</b></label>
        <input type="text" placeholder="Nhập họ và tên" name="name" required>

        <label for="phone_num"><b>Số Điện Thoại</b></label>
        <input type="text" placeholder="Nhập số điện thoại" name="phone_num" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Nhập Email" name="email" required>

        <label for="address"><b>Địa chỉ</b></label>
        <input type="text" placeholder="Nhập địa chỉ" name="address">

        <label for="birthday"><b>Ngày Sinh</b></label>
        <input type="date" id="birthday" name="birthday" required>

        <label for="gender"><b>Giới tính</b></label>
        <input type="radio" name="gender" value="male">Nam
        <input type="radio" name="gender" value="female">Nữ
        <input type="radio" name="gender" value="other">Other


      <p>Để tạo tài khoản, bạn cần đồng ý với <a href="#" style="color:dodgerblue">Điều khoản và bảo mật</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signup">Đăng Ký</button>
      </div>
    </div>
  </form>
</div>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<div>
<?php include_once('layouts/footer.php');
?>
</div>