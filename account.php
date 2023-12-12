<?php
    session_start();
    
    $page_title = "Account";
?>

<?php require_once "php/includes/head.inc.php"; ?>

<body>
    <?php require_once "php/includes/header.inc.php"; ?>

    <div class="container my-5">
        <h1 class="fs-2 mb-3"><?= h($page_title); ?></h2>
        <p>ID: <?= h($_SESSION['id']); ?></p>
        <p>Username: <?= h($_SESSION['username']); ?></p>
        <p>Email: <?= h($_SESSION['email']); ?></p>
    </div>

    <?php require_once "php/includes/footer.inc.php"; ?>
</body>
</html>
