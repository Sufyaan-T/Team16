<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Log In - GAMES4U</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/logIn.css">        
    </head>
    
    <body>
        <!-- establising where java script file is located -->
        <script src="./logIn.js"></script>

        <!-- when logo is clicked, will take user back to home page -->
        <a title="Click Here To Go Back To The Home Page" href="../BasicWebPage/basicWeb.html"> 
            <img src="../BasicWebPage/images/Logo.png" class="logo">
        </a>    

        <!-- container that holds login/signup forms -->
        <div class="container">

            <!-- code for the log in form -->
            <form class="form" id="login" action="loginScript.php" method="POST">

                <h1  class="formTitle">Login</h1>
                <div class="formMessage formMessageError"></div>
                <div class="formInputGroup">

                    <!-- input for email -->
                    <input type="email" class="formInput" placeholder="Email Address" autofocus name="email">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup">

                    <!-- input for password -->
                    <input type="password" class="formInput" placeholder="Password" autofocus name="password">
                    <div class="formInputErrorMessage"></div>
                </div>

                <!-- submit button -->
                <button class="formButton" type="Submit" name="submit">Submit</button>

                <p class="formText">
                    <!-- click on this link to log in as admin -->
                    <a class="formLink" href="../AdminPage/AdminlogIn.html" >Log In as Administrator</a>
                </p>

                <p class="formText">
                    <!-- link changes form into a sign up form-->
                    <a class="formLink" id="linkCreateAccount">Click Here To Create An Account!</a>
                </p>
            </form>

            <!-- form is set as hidden for the time being -->
            <!-- when create account link is click, it will show create account form and hide log in form -->
            <form class="formHidden" id="createAccount"  action="signUpScript.php" method="POST" >
                
                <h1  class="formTitle">Create Account</h1>
                <div class="formMessage formMessageError"></div>

                <div class="formInputGroup"> 
                    <!-- full name sign up -->
                    <input type="text" id="signupFullName" class="formInput" placeholder="Full Name" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup">
                    <!-- email address sign up -->
                    <input type="email" class="formInput" placeholder="Email Address" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup"> 
                    <!-- password sign up -->
                    <input type="password" id="signupPassword"class="formInput" placeholder="Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup"> 
                    <!-- makes the user confirm their sign up -->
                    <input type="password" id="signupConfirmPassword"class="formInput" placeholder="Confirm Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <!-- submit button -->
                <button class="formButton" type="Submit">Submit</button>

                <p class="formText">
                    <!-- clicking this will hide sign up -->
                    <!-- will show log in form -->
                    <!-- done through js -->
                    <a  class="formLink" id="linkLogIn">Already Have An Account? Sign In</a>
                </p>
            </form>
            
        </div>

    </body>

</html>