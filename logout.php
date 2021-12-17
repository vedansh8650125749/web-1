<?php
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['USER_NAME']);
header('location:mini.php');
die();
