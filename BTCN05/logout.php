<?php
require_once 'init.php';
unset($_SESSION['username']);
header('location: index.php');

exit();

?>