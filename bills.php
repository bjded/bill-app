<?php
    session_start();
    
    $page_title = "Bills";
?>

<?php require_once "php/includes/head.inc.php"; ?>

<body>
    <?php require_once "php/includes/header.inc.php"; ?>

    <div class="container my-5">
        <h1 class="fs-2 mb-3"><?= h($page_title); ?></h2>
        <p>There are currently no bills to display..</p>
    </div>

    <?php require_once "php/includes/footer.inc.php"; ?>
</body>
</html>
