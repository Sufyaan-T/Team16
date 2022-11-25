function setFormMessage(formElement, type, message){
    const messageElement = formElement.querySelector(".formMessage");

    messageElement.textContent = message;
    messageElement.classList.remove("formMessageSuccess, formMessageError");
    messageElement.classList.add(`formMessage  ${type}`)
};

function setInputError(inputElement, message){
    inputElement.classList.add("formInputError");
    inputElement.parentElement.querySelector(".formInputErrorMessage").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("formInputError");
    inputElement.parentElement.querySelector(".formInputErrorMessage").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const logInForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        logInForm.classList.add("formHidden");
        createAccountForm.classList.remove("formHidden");
    });

    document.querySelector("#linkLogIn").addEventListener("click", e => {
        e.preventDefault();
        logInForm.classList.remove("formHidden");
        createAccountForm.classList.add("formHidden");
    });

    logInForm.addEventListener("submit", e => {
        e.preventDefault();

        // perform ajax/fetch login
        
        setFormMessage(logInForm, "error", "UserName/Password Combination is Invalid");
    });

    document.querySelectorAll(".formInput").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id == "signupPassword" && e.target.value.length > 0 && e.target.value.length <8) {
                setInputError(inputElement, "Password Must Be More Than 8 Characters")
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });

});




