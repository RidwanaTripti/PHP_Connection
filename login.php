<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <link rel ="stylesheet"href="style.css"/>
</head>
<body>
    <div class="wrapper">
    <form>
    <h3>Login Form</h3>
     <div>
        <label for="email_address"class="required">Email Address</label>
        <input type="email"placeholder="example@gmail.com"/>
    </div>
    <div>
        <label for="password"class="required">Password</label>
        <input type="password"placeholder="*********"/>
    </div>
    <input type="submit"name="submit"value="Login"/>

    <div>
        <p><a href="#">Forgot password?</a></p>
        <hr>
        <p>New to this platform?<a href="index.html">Sign up</a></p>
    </div>
 </form>   
    </div>   
</body>
</html>