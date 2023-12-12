<?php
    // Check for session and redirect if logged in
    session_start();
    
    if (isset($_SESSION["id"])) {
        header("Location: /bill-app/");
        exit();
    }

    $page_title = "Register";
?>

<?php require_once "php/includes/head.inc.php"; ?>

<body>
    <?php require_once "php/includes/header.inc.php"; ?>

    <div class="container my-5">
        <form class="w-75 m-auto" id="register-form">
            <h1 class="fs-2 mb-3"><?= h($page_title); ?></h2>

            <!-- <div id="form-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                <span>Lorem ipsum dolor sit amet.</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="reg-username" name="reg-username" placeholder="Username">
                <label for="reg-username">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="reg-email" name="reg-email" placeholder="Email">
                <label for="reg-email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="reg-password" name="reg-password" placeholder="Password">
                <label for="reg-password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        </form>
    </div>

    <?php require_once "php/includes/footer.inc.php"; ?>
</body>
</html>
