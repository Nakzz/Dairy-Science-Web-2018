<?php
session_start();
if(isset($_SESSION['admin_user'])){
unset($_SESSION['admin_user']);
session_destroy;
header('LOCATION:../index.php');
}
?>