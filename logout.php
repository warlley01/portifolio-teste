<?php
    session_start();

    unset(
        $_SESSION['userEmail'],
        $SESSION['userNome']
    );

    header("Location: entrar.php");
?>