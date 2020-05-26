<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Signup Form Design</title>
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
    height: 600px;
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

.loginbox input[type="text"], input[type="password"],input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
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
        <h1>Register Here</h1>
         <form method="post" action="register1.php">
            <?php include('errors.php'); ?>
            <p>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
            </p>
            <p>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
            </p>
            <p>
            <label>Password</label>
            <input type="password" name="password_1" placeholder="Enter Password" value="<?php echo $email; ?>">
            </p>
            <p>
            <label>Confirm password</label>
            <input type="password" name="password_2" placeholder="Enter Password" >
            </p>
           
            <input type="submit" class="btn" name="reg_user">
        
        <p>
           <a href="login1.php"> Already a member? Sign in</a>
        </p>
        </form>
        
    </div>

</body>
</html>