let signupForm = document.querySelector("#signup-form");
let emailField = signupForm.elements.email;
let birthDateField = signupForm.elements.date;
let genderField = signupForm.elements.gender;
let nameField = signupForm.elements.name;
let phonenumberField = signupForm.elements.phonenumber;
let passwordField = signupForm.elements.password;
let nameErrorP = document.querySelector("#name-error-p");
let phoneErrorP = document.querySelector("#phonenumber-error-p");
let passwordErrorP = document.querySelector("#password-error-p");
let generalErrorP = document.querySelector("#general-error-p");

signupForm.addEventListener("submit", async function (eventObj) {
    //prevent form request
    eventObj.preventDefault();
    let email = emailField.value;
    let birthDate = birthDateField.value;
    let gender = genderField.value;
    let name = nameField.value;
    let password = passwordField.value;
    let phonenumber = phonenumberField.value;
    let nameValid = false;
    let passwordValid = false;
    let phonenumberValid = false;

    //VALIDATIONS CONDITIONS
    //check name
    if (name.length < 3) {

        nameErrorP.innerText = "Name Length Has To Be Atleast 3 Characters";
    }
    else { nameValid = true }
    //check password
    if (password.length < 5) {

        passwordErrorP.innerText = "Password Length Has To Be Atleast 5 Characters";

    }
    else { passwordValid = true }
    //check phonenumber
    if (phonenumber.length < 10) {
        phoneErrorP.innerText = "Please Type A Valid Phone Number";
    }
    else {
        phonenumberValid = true;
    }

    //SENDING POST REQUEST TO THE SERVER
    if (nameValid && passwordValid && phonenumberValid) {

        let signupResponse = await signUpUser(name, gender, birthDate, phonenumber, email, password);

        if (signupResponse.data.success) {
            //send the code sms then redirect user to the phone verification page

            let sendSMSResponse = await sendSMS(phonenumber);
            console.log(sendSMSResponse);
            if (sendSMSResponse.data.success) {
                window.location.href = "verifynumber.php?name=" + name + "&email=" + email + "&number=" + phonenumber;
            }

            else if (sendSMSResponse.data.error) {
                //display the error in the sign up page
                generalErrorP.innerText = sendSMSResponse.data.error;
            }

        }
        else if (signupResponse.data.error) {
            //display the error in the sign up page
            generalErrorP.innerText = signupResponse.data.error;
        }
    }



});


//INPUT LISTENERS TO REMOVE VALIDATION ERRORS
nameField.addEventListener("input", function () {
    if (nameField.value.length >= 3) {
        nameErrorP.innerText = "";
    }

});
phonenumberField.addEventListener("input", function () {
    if (phonenumberField.value.length == 11) {
        phoneErrorP.innerText = "";
    }

});


passwordField.addEventListener("input", function () {
    if (passwordField.value.length >= 5) {
        passwordErrorP.innerText = "";
    }

});

