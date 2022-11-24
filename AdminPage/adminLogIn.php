<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
   
    <head>
   
        <title>Administrator Log In</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/AdminlogIn.css">        

    </head>

    <body>
        <script src="./js/AdminlogIn.js"></script>
    
        <a title="Click Here To Go Back To The Home Page" href="../BasicWebPage/basicWeb.html"> 
            <img src="../BasicWebPage/images/Logo.png" class="logo">
        </a>    

        <div class="container">

            <form class="form" id="login">

                <h1  class="formTitle">Administrator Login</h1>
                
                <div class="formMessage formMessageError"></div>
                
                <div class="formInputGroup">
                
                    <input type="text" class="formInput" placeholder="Administrator User Name" autofocus>
                    <div class="formInputErrorMessage"></div>

                </div>
                
                <div class="formInputGroup">
                    
                    <input type="password" class="formInput" placeholder="Administrator Password" autofocus>
                    <div class="formInputErrorMessage"></div>

                </div>
                
                <button class="formButton" type="Submit">Submit</button>
                
                <p class="formText">
                    <a class="formLink" href="../logInForm/logIn.html">Log in as User</a>
                </p>
                
        </div>


    </body>


</html>