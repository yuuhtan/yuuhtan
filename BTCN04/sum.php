<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <link rel="stylesheet" href="sum.css">
    <!-- Latest compiled and minified JavaScript -->
    <script ></script>
</head>
<body>

<div id="openModal" class="modalDialog">
    <div>
        <?php
          function sum($x, $y) 
          {
            $z = $x + $y;
            return $z;          
          }
          echo 'Tổng 2 số bạn vừa nhập là : ';
          echo  sum($_GET['number1'],$_GET['number2']);
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
</body>
</html>
