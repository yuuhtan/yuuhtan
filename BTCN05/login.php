<?php
require_once 'init.php';
require_once  'functions.php';
$title = '';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = findUserByUsername($username);
    var_dump($user);
    if(!$user){
        $error = 'User not found';
    }
    else {
        if($password != $user['password']){
            $error = 'Password incorrect';
        }
        else {
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
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
<?php else :?>
<form action="login.php" method="post" enctype="multipart/form-data">
        <h1>Đăng Nhập</h1>
            <input type="text"  placeholder="Tài khoản" id="username" name="username"required="">
            <input type="password" placeholder="Mật khẩu" id="password" name="password"required="">
            <button type="submit" class="btn btn-primary" name="btnSend">Login</button>
<?php endif; ?>
<?php include 'footer.php'; ?>