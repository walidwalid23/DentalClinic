let addForm = document.querySelector("#add-secretary-form");
let secretaryEmailField = addForm.elements.email;
let responseMessageField = document.querySelector("#response-message");

addForm.addEventListener("submit", async function (event) {
    //preventing the form from reloading the page on submit
    event.preventDefault();

    let secretaryEmail = secretaryEmailField.value;

    let serverResponse = await axios.post("http://localhost/DentalClinic/routes/addsecretary.route.php",
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