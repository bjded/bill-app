<?php
    // Sanitize output
    function h($input) {
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }
?>