let loginForm = document.querySelector("#login-form");
let loginUsernameError = document.querySelector("#usernameError");
let loginPasswordError = document.querySelector("#passwordError");
let emailField = loginForm.elements.email;
let passwordField = loginForm.elements.password;
let passwordErrorP = document.querySelector("#password-error-p");
let rememberBox = loginForm.elements.rememberbox;

loginForm.addEventListener("submit", function (eventObj) {
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
    //SERVER CHECKING
    async function postToServer(usernameValue, passwordValue) {
        try {
            let postResponse = await axios.post("http://localhost/webproject/serverloginvalidation.php", {
                username: usernameValue,
                password: passwordValue,
                rememberCheck: (rememberBoxCheck == true) ? "yes" : "no"

            });
            console.log(postResponse);

            if (postResponse.data.error) {
                //DECODED JSON (OBJECT) CONTAINING ERROR IS SENT(IN CASE OF VALIDATION ERRORS)
                let matchError = document.querySelector("#match-error");
                let errorMessage = postResponse.data.error;
                matchError.innerText = errorMessage;
            }
            else {
                //DECODED JSON (OBJECT) CONTAINING SUCCESS IS SENT(IN CASE OF NO ERRORS)
                //go to the home page
                if (postResponse.data.success) {

                    window.location.href = "home.php";
                }


            }
        }
        catch (error) {
            document.write('<h3 style="color:red">Error occured:' + error + '</h3>');
        }
    }

    if (usernameValid && passwordValid) {

        postToServer(username, password);
    }


});

//INPUT LISTENERS TO REMOVE VALIDATION ERRORS
passwordField.addEventListener("input", function () {
    if (passwordField.value.length >= 5) {
        passwordErrorP.innerText = "";
    }

});


