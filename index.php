<!DOCTYPE html>
<html>
<head>
    <title>Number Guesser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="game-box">
        <h1>🔢 Number Guessing Game</h1>
        <form action="process.php" method="POST">
            <div class="input-group">
                <label for="name">Your Name:</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="input-group">
                <label for="guess">Your Guess (1-10):</label>
                <input type="number" name="guess" min="1" max="10" required>
            </div>
            
            <button class="neon-button">Guess Now!</button>
        </form>
    </div>
</body>
</html>