<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        /* Add your login form styles here */
        .login-form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            background: #68c9ac;
            color: #fff;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background: #5a8273;
        }
    </style>
</head>
<body>
    <div class="login-form-container">
        <h2>Login</h2>
        <form action="login.php" method="post" class="login-form">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
