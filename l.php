<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Simulated user authentication (replace with actual authentication logic)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if username and password are valid (replace with your authentication logic)
        if ($username === 'demo' && $password === 'password') {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: h1.php'); // Redirect to homepage after successful login
            exit();
        } else {
            echo '<p style="color:red;">Invalid username or password.</p>';
        }
    }
    ?>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>
