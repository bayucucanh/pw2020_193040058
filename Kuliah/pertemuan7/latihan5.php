<?php

if($_POST['username'] == 'admin' && $_POST['password'] == '12345') {
    echo 'Selamat datang admin';
} else {
    echo 'Salah';
}
