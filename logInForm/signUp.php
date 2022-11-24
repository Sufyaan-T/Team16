            <form class="formHidden" id="createAccount">
                
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