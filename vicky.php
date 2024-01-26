<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ff99cc 0%, #66ff66 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            max-width: 400px;
            margin: auto;
        }

        .login-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .textbox {
            position: relative;
            margin-bottom: 30px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            background: #f0f0f0;
            border: none;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
        }

        .textbox input:focus {
            background: #e0e0e0;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #4caf50;
            border: none;
            outline: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #45a049;
        }

        .btn-link {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="#">
                <div class="textbox">
                    <input type="email" placeholder="Email-Address" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="********" required>
                </div>
                <input type="submit" class="btn" value="Login">
                <a href="#" class="btn-link">Forgot Password?</a>
            </form>
            <p>Don't have an account? <a href="signup.php">Register here</a></p>
        </div>
    </div>
</body>

</html>
