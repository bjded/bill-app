<?php
    session_start();
    
    $page_title = "Home";
?>

<?php require_once "php/includes/head.inc.php"; ?>

<body>
    <?php require_once "php/includes/header.inc.php"; ?>

    <div class="container my-5">
        <h1 class="fs-2 mb-3"><?= h($page_title); ?></h2>
        <p>Bill App is a free money management tool for tracking, managing and paying your bills on time with configuarable reminders and one-click connections to all of your online payments.</p>
    </div>

    <?php require_once "php/includes/footer.inc.php"; ?>
</body>
</html>
