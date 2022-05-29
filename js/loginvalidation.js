let loginForm = document.querySelector("#login-form");
let loginUsernameError = document.querySelector("#usernameError");
let loginPasswordError = document.querySelector("#passwordError");
let emailField = loginForm.elements.email;
let passwordField = loginForm.elements.password;
let passwordErrorP = document.querySelector("#password-error-p");
let rememberBox = loginForm.elements.rememberbox;
let generalErrorP = document.querySelector("#general-error-p");

loginForm.addEventListener("submit", async function (eventObj) {
    //preventing the form from routing
    eventObj.preventDefault();
    let email = emailField.value;
    let password = passwordField.value;
    let rememberBoxCheck = rememberBox.checked;
    let passwordValid = false;
    //CLIENT SIDE VALIDATION
    if (password.length < 5) {

        passwordErrorP.innerText = "Password Length Has To Be Atleast 5 Characters";

    }
    else {
        passwordValid = true;
    }

    //SENDING POST REQUEST TO THE SERVER//SERVER CHECKING
    if (passwordValid) {
        let loginResponse = await loginUser(email, password, rememberBoxCheck);
        console.log(loginResponse.data);
        if (loginResponse.data.success) {
            window.location.href = "home.php";
        }
        //if the user is unverfied redirect him to verification page
        else if (loginResponse.data.unverified) {
            let unverfiedUser = loginResponse.data;
            window.location.href = "verifynumber.php?name=" + unverfiedUser.name + "&email=" + email + "&number=" + unverfiedUser.number;
        }
        //display any other errors
        else if (loginResponse.data.error) {
            //display the error in the login page
            generalErrorP.innerText = loginResponse.data.error;
        }

    }


});

//INPUT LISTENERS TO REMOVE VALIDATION ERRORS
passwordField.addEventListener("input", function () {
    if (passwordField.value.length >= 5) {
        passwordErrorP.innerText = "";
    }

});


