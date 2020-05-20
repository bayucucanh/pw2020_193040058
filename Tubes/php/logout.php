<?php
session_start();
session_destroy();
header("Location: login.php");

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: login.php");
die;
