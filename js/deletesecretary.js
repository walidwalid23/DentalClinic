let deleteForm = document.querySelector("#delete-secretary-form");
let secretaryEmailField = deleteForm.elements.email;
let responseMessageField = document.querySelector("#response-message");

deleteForm.addEventListener("submit", async function (event) {
    //preventing the form from reloading the page on submit
    event.preventDefault();

    let secretaryEmail = secretaryEmailField.value;

    let serverResponse = await axios.post("http://localhost/DentalClinic/routes/deletesecretary.route.php",
        {
            secretaryemail: secretaryEmail

        });

    console.log(serverResponse);

    if (serverResponse.data.success) {
        responseMessageField.style.color = "green";
        responseMessageField.innerText = serverResponse.data.success;
    }
    else if (serverResponse.data.error) {
        responseMessageField.style.color = "red";
        responseMessageField.innerText = serverResponse.data.error;

    }

});