<?php
// Replace 'newPasswordHere' with the new password you want to set for the user
$newPassword = 'Onepiece!';

// Hash the password using the default algorithm
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

echo "Hashed Password: " . $hashedPassword;
?>
