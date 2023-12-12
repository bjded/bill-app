<?php
    //session_start();
?>

<?php /*
<header>
    <h1>Bill App</h1>
    <ul>
        <li><a href="new.html">New Look</a></li>
        <li><a href="/bill-app/">Home</a></li>
        <?php if (!isset($_SESSION["id"])) : ?>
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
        <?php else : ?>
            <p><?= h($_SESSION['username']); ?> (<?= h($_SESSION['id']); ?>)</p>
            <li><a href="logout">Logout</a></li>
        <?php endif; ?>
    </ul>
</header>
<hr>
*/ ?>

<nav class="navbar navbar-expand bg-body-secondary p-3">
    <div class="container">
        <a href="/bill-app/" class="navbar-brand fw-bold">Bill App</a>
        <ul class="navbar-nav">
            <?php if (!isset($_SESSION["id"])) : ?>
                <li class="navbar-item">
                    <a href="login" class="nav-link">Login</a>
                </li>
                <li class="navbar-item">
                    <a href="register" class="nav-link">Register</a>
                </li>
            <?php else : ?>
                <li class="navbar-item">
                    <a href="bills" class="nav-link">Bills</a>
                </li>
                <li class="navbar-item">
                    <a href="account" class="nav-link">Account</a>
                </li>
                <li class="navbar-item">
                    <a href="logout" class="nav-link text-danger">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>