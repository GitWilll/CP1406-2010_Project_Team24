<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Create a post</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
</head>
    
<body>

<div id="mainHeader">
    <a href="index.html"><img src="Images/violinmusiccentre%20copy.png" alt="Townsville community music center logo"></a>
    <h1><span>Townsville Community Music Centre</span></h1>
    
<div id="navigation">  
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="talent.html">Local Talent</a></li>
    <li><a href="bulletin.html" class="current">Bulletin Board</a></li>
    <li><a href="apply.html">Apply</a>
         <ul>
            <li><a href="memberSignup.html">Become A member</a></li>
            <li><a href="volunteer.html">Volunteer for TCMC</a></li>
            <li><a href="performSignup.html">Perform with us</a></li>
        </ul>
    </li>
    <li><a href="about.html">About Us</a></li>
</ul> 
</div>
</div>
    
    <div id="content"><h1>Login</h1>

<p>Login to see the benefits of being a member!</p>


          
<form id="log on" name="log on" method="post" action="loginProcess.php">
                <fieldset>
                <legend>Login</legend>
                <table border="0">
            <tr>
                <?php if($_SESSION['ERROR'] == 'Inncorrect Username'){
                    echo"User Name Incorrect";
                } ?> 
                <td><label for ="userName">User Name:</label></td>
                <td><input type ="text" name ="userName" id = "userName"</td>
            </tr>
            <tr>
                <?php if($_SESSION['ERROR'] == 'Innocrect Password'){
                    echo"Innocrect Password";
                } ?> 
                <td><label for ="passWord">Password:</label></td>
                <td><input type ="text" name ="passWord" id = "passWord"</td>
            </tr>
            <tr>
                <td><input type="submit" name="Log In" id ="Log in" value ="Log In"></td>
            </tr>  
                    </fieldset>
                    </table>
    </form>      
</div>

<div id="footer">
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="bulletin.html">Bulletin Board</a></li>
    <li><a href="feeder.html">Music Benefits</a></li>
    <li><a href="talent.html">Local Talent</a></li>
    <li><a href="apply.html">Apply</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="about.html">Contact Us</a></li>
</ul>    
</div>    

</body>
</html>
