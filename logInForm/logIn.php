<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/logIn.css">        
    </head>
    
    <body>
        <script src="./logIn.js"></script>

        <a title="Click Here To Go Back To The Home Page" href="../BasicWebPage/basicWeb.html"> 
            <img src="../BasicWebPage/images/Logo.png" class="logo">
        </a>    

        <div class="container">

            <form class="form" id="login" action="loginScript.php" method="POST">

                <h1  class="formTitle">Login</h1>
                <div class="formMessage formMessageError"></div>
                <div class="formInputGroup">
                    <input type="text" class="formInput" placeholder="Email Address" autofocus name="email">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup">
                    <input type="password" class="formInput" placeholder="Password" autofocus name="password">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <button class="formButton" type="Submit" name="submit">Submit</button>

                <p class="formText">
                    <a class="formLink" href="../AdminPage/AdminlogIn.html" >Log In as Administrator</a>
                </p>

                <p class="formText">
                    <a class="formLink" id="linkCreateAccount">Click Here To Create An Account!</a>
                </p>
            </form>

            <form class="formHidden" id="createAccount">
                <h1  class="formTitle">Create Account</h1>
                <div class="formMessage formMessageError"></div>

                <div class="formInputGroup"> 
                    <input type="text" id="signupFullName" class="formInput" placeholder="Full Name" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup">
                    <input type="email" class="formInput" placeholder="Email Address" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup"> 
                    <input type="password" id="signupPassword"class="formInput" placeholder="Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <button class="formButton" type="Submit">Submit</button>

                <p class="formText">
                    <a  class="formLink" id="linkLogIn">Already Have An Account? Sign In</a>
                </p>
            </form>

            
        </div>



    </body>

</html>