    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <link rel="stylesheet" href="sum.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Lập Trình Web 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sum.php">Tính Tổng </a>
      </li>
      <li class="nav-item <?php echo $d ?> ">
        <a 
        <?php $currentUser = getCurrentUser();
        if($currentUser)
        {
            $e = "disabled";
        } ?>
        class="nav-link <?php echo $e ?>" href="register.php">Register </a>
      </li>
      <li class="nav-item <?php echo $d ?> ">
        <a   
        <?php $currentUser = getCurrentUser();
        if($currentUser)
        {
            $a = "disabled";
            $c = "active";
        } ?>
        class="nav-link <?php echo $a ?>" href="login.php">Login </a>
      </li>
      <li class="nav-item <?php echo $c ?> ">
      <a   
        <?php $currentUser = getCurrentUser();
        if(!$currentUser)
        {
            $b = "disabled";
            $d = "active";
        } ?>
        class="nav-link <?php echo $b ?> " href="logout.php">logout </a>
      </li>
    </ul>
  </div>
</nav>
        <h1><?php echo $title; ?></h1>
    </div>
</body>
