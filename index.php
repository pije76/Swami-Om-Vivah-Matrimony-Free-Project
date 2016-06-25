<?php

session_start();
if (!isset($_SESSION['LOGIN_STATUS'])) {
    header('location:main.php');
} else {
    header('location:userHome.php');
}
?>