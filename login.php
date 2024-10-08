<?php
    function verifyUser($p_email, $p_pw){
        if($p_email === "bendevos@shop.com" && $p_pw === "12345isnotsecure"){
            return true;
        }
    }
    
    session_start();
    
    if(!empty($_POST)){
        $email = $_POST["login-email"];
        $pw = $_POST["login-pw"];

        if(verifyUser($email, $pw)){
            $_SESSION["logged-in"] = true;
            $_SESSION["user-email"] = $email;

            header(("Location: index.php"));
        }else{
            $login_error = true;
        }
    }

    if(isset($_SESSION["logged-in"]) && $_SESSION["logged-in"] === true){
        header(("Location: index.php"));
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php if(!empty($loggin_error) && $loggin_error === true){echo "error";}?>
    <?php include_once("header.inc.php");?>
    <main class="login-container">
        <form action="" method="post" class="login-form">
            <div class="form-wrap">
                <label for="in-email">Email</label>
                <input type="text" name="login-email" id="in-email">
            </div>
            <div class="form-wrap">
                <label for="in-password">Wachtwoord</label>
                <input type="password" name="login-pw" id="in-password">
            </div>
            <input type="submit" value="login" class="btn">
        </form>
    </main>
</body>
</html>