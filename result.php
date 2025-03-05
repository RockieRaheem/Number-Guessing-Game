<?php
session_start();
if (!isset($_SESSION['result'])) {
    header('Location: index.php');
    exit;
}

$result = $_SESSION['result'];
unset($_SESSION['result']); // Clear session data
?>
<!DOCTYPE html>
<html>
<head>
    <title>Game Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-box <?php echo $result['is_correct'] ? 'win' : 'lose'; ?>">
        <h2>Game Result 🎮</h2>
        <div class="result-content">
            <p class="player-name">Player: <?php echo $result['name']; ?></p>
            <p class="result-message">
                <?php if ($result['is_correct']): ?>
                    🎉 Congratulations, you have guessed correctly <?php echo $result['user_guess']; ?>.
                <?php else: ?>
                    😢 Sorry buddy, be serious next time.<br>
                    Your guess was <?php echo $result['user_guess']; ?>
                    <p class="correct-number">The right number was: <?php echo $result['correct_number']; ?></p>
                <?php endif; ?>
            </p>
            
            
            <div class="button-group">
                <a href="index.php" class="neon-button play-again">Play Again</a>
                <a href="goodbye.php" class="neon-button quit-game">Quit Game</a>
            </div>
        </div>
    </div>
</body>
</html>