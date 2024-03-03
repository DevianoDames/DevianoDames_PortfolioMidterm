
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="js/SplitText.js"></script>
    <script src="https://kit.fontawesome.com/085f61f5df.js" crossorigin="anonymous"></script>
    <script defer src="../js/main.js"></script>

</head>
<style>
   /* Login Form Styling */
.login-form {
    background: #323946; 
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    max-width: 400px; 
    margin: auto; 
}

.login-form label {
    display: block;
    color: #fff; 
    margin-bottom: 10px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
    background: #1f242d; 
    color: #fff; 
}

.login-form input[type="submit"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: none;
    background: #68c9ac; 
    color: #323946;
    cursor: pointer;
}

.login-form input[type="submit"]:hover {
    background: #5a8273; 
}
 
</style>
<body>
    
    
 
<form action="login.php" method="post" class="login-form">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
    <input type="submit" value="login">
</form>

</body>
</html>
