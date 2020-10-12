<?php
if(!$_SESSION['userEmail']) {
    header('Location: entrar.php');
    exit();
}