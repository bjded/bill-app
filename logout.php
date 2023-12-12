<?php
    session_start();

    // Destory current session if it exists and redirect to home page
    if (isset($_SESSION['id'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /bill-app/");
        exit();
    }
    // If no session exists, redirect to login
    else {
        header("Location: login");
        exit();
    }
?>
