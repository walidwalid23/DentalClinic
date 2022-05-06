let editForm = document.querySelector("#edit-form");
let emailField = editForm.elements.email;
let nameField = editForm.elements.name;
let phonenumberField = editForm.elements.phonenumber;
let oldEmail = emailField.value;
let oldName = nameField.value;
let oldNumber = phonenumberField.value;
let nameErrorP = document.querySelector("#name-error-p");
let emailErrorP = document.querySelector("#email-error-p");
let phoneErrorP = document.querySelector("#phonenumber-error-p");
let generalErrorP = document.querySelector("#general-error-p");



editForm.addEventListener("submit", async function (eventObj) {
    //prevent form request
    eventObj.preventDefault();

    let newEmail = emailField.value;
    let newName = nameField.value;
    let newPhoneNumber = phonenumberField.value;
    let nameUpdated = false;
    let emailUpdated = false;
    let phonenumberUpdated = false;

    //check if no changes were made to the form
    if (newEmail == oldEmail && newName == oldName && newPhoneNumber == oldNumber) {
        generalErrorP.innerText = "No Updates Were Made";
    }
    else {

        //VALIDATIONS CONDITIONS FOR UPDATED VALUES
        //check name
        if (newName != oldName) {
            if (newName.length < 3) {

                nameErrorP.innerText = "Name Length Has To Be Atleast 3 Characters";
            }
            else {
                nameUpdated = true;
            }
        }
        //check email
        if (newEmail != oldEmail) {
            emailUpdated = true;
        }

        //check phonenumber
        if (newPhoneNumber != oldNumber) {
            if (newPhoneNumber.length < 10) {
                phoneErrorP.innerText = "Please Type A Valid Phone Number";
            }

            else {
                phonenumberUpdated = true;
            }
        }


        //SENDING ONLY THE UPDATED FIELDS TO THE SERVER
        let updatedFields = { "oldEmail": oldEmail };
        if (nameUpdated) {
            updatedFields.name = newName;
        }
        if (emailUpdated) {
            updatedFields.email = newEmail;
        }
        if (phonenumberUpdated) {
            updatedFields.number = newPhoneNumber;
        }
        console.log(updatedFields);

        let editResponse = await axios.post("http://localhost/DentalClinic/routes/edituser.route.php",
            updatedFields);

        console.log(editResponse);

        if (editResponse.data.success) {
            generalErrorP.style.color = "green";
            generalErrorP.innerText = editResponse.data.success;

        }
        else if (editResponse.data.error) {
            //display the error in the edit page
            generalErrorP.innerText = editResponse.data.error;
        }


    }


});