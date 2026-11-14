<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

<?php include 'header.inc'; ?>

    <form action="process.php" method="post">
        <p>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required>
        </p>

        <p>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="hidden" name="Redha_Waseem" value="R106389158">
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
    <?php include 'footer.inc'; ?>
</body>
</html>
