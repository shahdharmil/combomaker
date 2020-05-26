<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(pic1.jpg);
    background-size: cover;
   background-position: top;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 470px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    box-shadow: 7px 5px 70px black;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox button[type="submit"]
{
    border: none;
    outline: none;
    height: 50px;
    width: 250px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 15px;
}
.loginbox button[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
.error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
}
.success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}

    </style>
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="login1.php">
            <?php include('errors.php'); ?>
            <br>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username">
        
        
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        
           <button type="submit" class="btn"  name="login_user">Login</button><br><br>
            Not yet a member? <a href="register1.php">Sign up</a>
        </form>
        
    </div>

</body>
</html>