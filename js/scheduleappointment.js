let scheduleAppointmentForm = document.querySelector("#scheduling-form");
let isRegistered = (document.querySelector("#registered")) ? true : false;


scheduleAppointmentForm.addEventListener("submit", async function (eventObj) {

    //prevent form request
    eventObj.preventDefault();
    if (!isRegistered) {
        console.log("not registered");
        //unregistered form is shown
        let nameField = scheduleAppointmentForm.elements.name;
        let phonenumberField = scheduleAppointmentForm.elements.phonenumber;
        let ageField = scheduleAppointmentForm.elements.age;
        let genderField = scheduleAppointmentForm.elements.gender;
        let appointmentDate = scheduleAppointmentForm.elements.date;
        let appointmentTime = scheduleAppointmentForm.elements.time;
        let name = nameField.value;
        let gender = genderField.value;
        let age = ageField.value;
        let phonenumber = phonenumberField.value;
        let date = appointmentDate.value;
        let time = appointmentTime.value;
        //send the SMS code for phone verification then redirect user to the phone verification page
        let sendSMSResponse = await sendSMS(phonenumber);
        console.log(sendSMSResponse);
        if (sendSMSResponse.data.success) {
            window.location.href = "verifynumber.php?name=" + name + "&gender=" + gender + "&number=" + phonenumber
                + "&age=" + age + "&date=" + date + "&time=" + time;
        }

        else if (sendSMSResponse.data.error) {
            //display the error in the sign up page
            generalErrorP.innerText = sendSMSResponse.data.error;
        }
    }



    else {
        console.log(" registered");
        //registered form is shown
        let appointmentDate = scheduleAppointmentForm.elements.date;
        let appointmentTime = scheduleAppointmentForm.elements.time;
        let date = appointmentDate.value;
        let time = appointmentTime.value;
        //go to registered route
        serverResponse = await axios.get("http://localhost/DentalClinic/routes/registeredappointment.route.php?date=" + date + "&time=" + time);
        console.log(serverResponse);
        if (serverResponse.data.success) {
            alert("Your Appointment Is Scheduled Successfully And You Shall Receive A Call Soon");
        }
        else if (serverResponse.data.error) {
            alert(verifyResponse.data.error);
        }
    }




});


