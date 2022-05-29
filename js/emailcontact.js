let contactForm = document.querySelector("#contact-us-form");
let nameInputField = document.querySelector("#name-input");
let emailInputField = document.querySelector("#email-input");
let subjectInputField = document.querySelector("#subject-input");
let messageInputField = document.querySelector("#message-input");
let responseField = document.querySelector("#response-message");

contactForm.addEventListener("submit", async function (event) {
    //preventing the form from reloading the page on submit
    event.preventDefault();
    let name = nameInputField.value;
    let email = emailInputField.value;
    let subject = subjectInputField.value;
    let message = messageInputField.value;

    //send the data to server using ajax
    let emailResponse = serverResponse = await axios.get("http://localhost/DentalClinic/routes/emailcontact.route.php?email="
        + email + "&name=" + name + "&subject=" + subject + "&message=" + message);
    console.log(emailResponse);
    if (emailResponse.data.success) {
        responseField.style.color = "green";
        responseField.innerText = emailResponse.data.success;
    }
    else if (emailResponse.data.error) {
        console.log("erorr here");
        responseField.style.color = "red";
        responseField.innerText = emailResponse.data.error;

    }


});