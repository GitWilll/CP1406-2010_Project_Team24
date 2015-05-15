<!--Much of the following code is based on the "login.php" file that Lindsay Ward used during the Wk10 Lecture on PHP. (see "CP2010 Lecture 10-2 Authenticate Example.mov")-->

<?php session_start();
error_reporting(E_ALL);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TCMC - Login</title>
        <link href="stylesheet.css" rel="stylesheet">
    </head>
    
    <body>
        <h1>TCMC - Login</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<p style='color:red'>".$_SESSION['msg']"</p>";
        }
        if (!isset($_SESSION['msg'])) {
        ?>
<!--        <form id="login" name="login" method="post" action="secure.php">-->
        <form id="login" name="login" method="post" action="secure.php">
            <label for="email">Email Address:</label>
            <input type="text" name="email" id="EmailAddress">
            <br>
            <label for="password">Password:</label>
            <input type="text" name="password" id="Password">
            <br>
            <input type="submit" name="submit" value="Login">
        </form>
        <?php } 
//        The following functions are based on excerpts found on the HTML Form Guide web site: <http://www.html-form-guide.com/tag/php>
        function Login() {
            if(empty($_POST['email'])) {
                $this->HandleError("You Forgot to Enter Your Email Address!");
                return false;
            }
            if(empty($_POST['password'])) {
                $this->HandleError("You Forgot to Enter Your Password!");
                return false;
            }
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            if(!$this->userLoginDB($EmailAddress,$Password)) {
                return false;
            }
            session_start();
            $_SESSION[$this->getLoginSessionVar()] = $email;
            return true;
        }
        function CheckLogin() {
            session_start();
            $sessionvar = $this->GetLoginSessionVar();
            if(empty($_SESSION[$sessionvar])) {
                return false;
            }
            return true;
        }
        ?>
    </body>
    
</html>
