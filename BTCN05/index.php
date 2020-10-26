<?php
    require_once 'init.php';
    require_once 'functions.php';

    $title = 'Home';
    $currentUser = getCurrentUser();
?>
<?php include 'header.php'; ?>
<?php if ($currentUser): ?>
    <div class="alert alert-success" role="alert">
    Chào <?php echo $currentUser["username"]; ?>, Chúc mừng bạn đã đăng nhập thành công
    </div>
<?php else: ?>
    <div class="alert alert-secondary" role="alert">
    Bạn Chưa Đăng Nhập !!! 
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>
