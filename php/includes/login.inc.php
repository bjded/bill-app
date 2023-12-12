<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once "dbh.inc.php";

        $username_email = $_POST["log-username-email"];
        $password = $_POST["log-password"];

        // Validation

        // Check for existing user
        $stmt = $conn -> prepare('SELECT * FROM users WHERE username=? OR email=?');
        $stmt -> bind_param("ss", $username_email, $username_email);
        $stmt -> execute();
        $result = $stmt -> get_result();

        // Verify password and start session if successful
        if ($row_data = $result->fetch_assoc()) {
            // Check password
            if (password_verify($password, $row_data["password"])) {

                // Start Session
                session_start();
                $_SESSION["id"] = $row_data["id"];
                $_SESSION["username"] = $row_data["username"];
                $_SESSION["email"] = $row_data["email"];

                // Return success
                echo "Logged in successfully";
                exit();
            } else {
                echo "Invalid password";
                exit();
            }
        } else {
            echo "Invalid username or email";
            exit();
        }
    } else {
        header("Location: ../../login");
        exit();
    }
?>
