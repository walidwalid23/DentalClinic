let signupForm = document.querySelector("#signup-form");
let nameField = signupForm.elements.name;
let phonenumberField = signupForm.elements.phonenumber;
let passwordField = signupForm.elements.password;
let nameErrorP = document.querySelector("#name-error-p");
let phoneErrorP = document.querySelector("#phonenumber-error-p");
let passwordErrorP = document.querySelector("#password-error-p");

signupForm.addEventListener("submit", function (eventObj) {
    //prevent form request
    eventObj.preventDefault();
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
    if (phonenumber.length < 11) {
        phoneErrorP.innerText = "Please Type A Valid Phone Number";
    }
    else {
        phonenumberValid = true;
    }
    //SERVER CHECKING
    /*
 async function postToServer(usernameValue, passwordValue, emailValue, dateValue) {
     try {

         let postResponse = await axios.post("http://localhost/webproject/serversignupvalidation.php", {
             username: usernameValue,
             password: passwordValue,
             email: emailValue,
             date: dateValue

         });
         console.log(postResponse);

         if (postResponse.data.error) {
             //JSON IS SENT(IN CASE OF VALIDATION ERRORS)
             let uniqueError = document.querySelector("#unique-error");
             let errorMessage = postResponse.data.error;
             uniqueError.innerText = errorMessage;
         }
         else if (postResponse.data.success) {
             //DECODED JSON (OBJECT) CONTAINING SUCCESS IS SENT(IN CASE OF NO ERRORS)
             //go to the home page

             window.location.href = "profileimageform.php";

         }
         else {
             document.write('<h2 style="color:red">' + postResponse.data + '</h2>');
             document.write('<h6 style="color:red">' + postResponse.status + '</h6>');
         }
     }
     catch (error) {

         document.write('<h3 style="color:red">Error occured:' + error + '</h3>');
     }
 }
 
     if (nameValid && passwordValid && phonenumberValid) {
 
         postToServer(username, password, email, date);
     }
     */


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

