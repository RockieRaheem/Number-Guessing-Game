<?php
session_start();

// Get user input
$name = htmlspecialchars($_POST['name']);
$user_guess = (int)$_POST['guess'];
$correct_number = rand(1, 10);

// Store results in session
$_SESSION['result'] = [
    'name' => $name,
    'user_guess' => $user_guess,
    'correct_number' => $correct_number,
    'is_correct' => ($user_guess === $correct_number)
];

// Redirect to result page
header('Location: result.php');
exit;
?>