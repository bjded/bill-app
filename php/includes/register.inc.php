<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once "dbh.inc.php";

        $username = $_POST["reg-username"];
        $email = $_POST["reg-email"];
        $password = $_POST["reg-password"];

        // Validation
        if (empty($username) || empty($email) || empty($password)) {
            echo "Please fill out all form fields.";
            exit();
        }

        // Create prepared statement to check for an existing user
        $stmt = $conn -> prepare('SELECT * FROM users WHERE username=? OR email=?');
        $stmt -> bind_param("ss", $username, $email);
        $stmt -> execute();
        $result = $stmt -> get_result();

        // 
        if ($result -> fetch_assoc()) {
            echo "User already exists";
            exit();
        }
        else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            
            // Create account if no username or email combinations are found
            $stmt = $conn -> prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
            $stmt -> bind_param("sss", $username, $email, $password_hash);
            $stmt -> execute();

            // Close
            $stmt -> close();
            $conn -> close();

            // Success
            echo "Account created successfully";
            exit();
        }
    } else {
        header("Location: ../../register");
        exit();
    }
?>
