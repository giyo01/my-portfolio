<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // simple validation
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) >= 10) {
        echo 'OK';  // <-- THIS IS REQUIRED
        exit;
    } else if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) < 10) {
      echo 'Message must be at least 10 characters long';
      exit;
    }
    else {
        echo 'Please fill all fields correctly';
        exit;
    }
} else {
    echo 'Invalid request';
}
?>
