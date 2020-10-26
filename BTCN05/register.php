
<?php
require_once 'init.php';
require_once  'functions.php';
$title = '';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordagain = $_POST['passwordagain'];
    $user = findUserByUsername($username);
    if($user){
        $error = 'Account already exists ';
    }
    else {
        if($passwordagain != $password ){
            $error = 'Password incorrect';
        }
        else {
            newUserByUsername($username,$password);
            header("Location: login.php");
            exit();
        }
    }
}
?>

<?php include 'header.php'; ?>
<?php if(isset($error)): ?>
<div class="alert alert-danger" role = "alert">
    <?php echo $error; ?>
</div>
<div>
    <button type="submit" class="btn btn-primary" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>
     <script>
         function quay_lai_trang_truoc()
        {
        history.back();
        }
     </script>
</div>
<?php else :?>
<form action="register.php" method="post" enctype="multipart/form-data">
        <h1>Đăng Kí</h1>
            <input type="text"  placeholder="Tài khoản" id="username" name="username"required="">
            <input type="email"  placeholder="Mail Address" id="mail" name="mail"required="">
            <input type="password" placeholder="Mật khẩu" id="password" name="password"required="">
            <input type="password" placeholder="Nhập Lại Mật khẩu" id="passwordagain" name="passwordagain"required="">
            <button type="submit" class="btn btn-primary" name="btnSend">Login</button>
<?php endif; ?>
<?php include 'footer.php'; ?>