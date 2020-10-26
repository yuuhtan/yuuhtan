<?php
  require_once 'init.php';
  require_once 'functions.php';
  $title = '';
  $currentUser = getCurrentUser();
  if(!$currentUser)
  {
    header('location: login.php');
    exit();
  }
  if (isset($_POST['number1']) && isset($_POST['number2'])){
  $x = $_POST['number1'];
  $y = $_POST['number2'];
  $result = $x + $y;
  }

?>

<?php include 'header.php'; ?>
<?php if (isset($result)): ?>
    <div id="openModal" class="modalDialog">
    <div>
        <?php

          echo 'Kết quả 2 số bạn vừa nhập là :';
          echo $result;
          echo '<br><br>';
        ?>
            <button type="submit" class="btn btn-primary" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>

          <script>
              function quay_lai_trang_truoc()
              {
                  history.back();
              }
          </script>
    </div>
</div>
<?php else: ?>
<form action="sum.php" method="POST" >
        <h1>Tính Tổng </h1>
            <input type="number"  placeholder="Nhập số 1" name="number1"required="">
            <input type="number" placeholder="Nhập số 2" name="number2"required="">
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>