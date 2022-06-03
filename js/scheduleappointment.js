let scheduleAppointmentForm = document.querySelector("#scheduling-form");
let isRegistered = (document.querySelector("#registered")) ? true : false;
let generalErrorP = document.querySelector("#general-error-p");

scheduleAppointmentForm.addEventListener("submit", async function (eventObj) {

    //prevent form request
    eventObj.preventDefault();
    if (!isRegistered) {
        //unregistered form is shown
        let nameField = scheduleAppointmentForm.elements.name;
        let phonenumberField = scheduleAppointmentForm.elements.phonenumber;
        let ageField = scheduleAppointmentForm.elements.age;
        let genderField = scheduleAppointmentForm.elements.gender;
        let appointmentDate = scheduleAppointmentForm.elements.date;
        let appointmentTime = scheduleAppointmentForm.elements.time;
        let name = nameField.value;
        let gender = genderField.value;
        let birthDate = ageField.value;
        let phonenumber = phonenumberField.value;
        let date = appointmentDate.value;
        let time = appointmentTime.value;
        //check if the date  and time  are valid 
        if (!dateValid(date)) {
            generalErrorP.innerText = "Please Enter A Valid Appointment Date";
        }
        else if (!birthDateValid(birthDate)) {
            generalErrorP.innerText = "Please Enter A Valid Birth Date";
        }
        else if (!timeValid(time)) {
            generalErrorP.innerText = "Please Enter A Valid Time";

        }
        else {
            //send the SMS code for phone verification then redirect user to the phone verification page
            let sendSMSResponse = await sendSMS(phonenumber);
            console.log(sendSMSResponse);
            if (sendSMSResponse.data.success) {
                window.location.href = "verifynumber.php?name=" + name + "&gender=" + gender + "&number=" + phonenumber
                    + "&age=" + birthDate + "&date=" + date + "&time=" + time;
            }

            else if (sendSMSResponse.data.error) {
                //display the error in the appointment page
                generalErrorP.innerText = sendSMSResponse.data.error;
            }
        }
    }



    else {
        //registered form is shown
        let appointmentDate = scheduleAppointmentForm.elements.date;
        let appointmentTime = scheduleAppointmentForm.elements.time;
        let date = appointmentDate.value;
        let time = appointmentTime.value;
        //check if the date  and time  are valid 
        if (!dateValid(date)) {
            generalErrorP.innerText = "Please Enter A Valid Date";
        }
        else if (!timeValid(time)) {
            generalErrorP.innerText = "Please Enter A Valid Time";

        }
        else {


            //go to registered route
            serverResponse = await axios.get("http://localhost/DentalClinic/routes/registeredappointment.route.php?date=" + date + "&time=" + time);
            console.log(serverResponse);
            if (serverResponse.data.success) {
                alert("Your Appointment Is Scheduled Successfully And You Shall Receive A Call Soon");
                window.location.href = "home.php";
            }
            else if (serverResponse.data.error) {
                generalErrorP.innerText = serverResponse.data.error;
            }
        }
    }


});


function timeValid(time) {
    hours = parseInt(time.split(":")[0]);
    if (hours > 20) {
        return false;
    }

    return true;

}

function dateValid(date) {
    date = date.split("-");
    year = parseInt(date[0]);
    month = parseInt(date[1]);
    day = parseInt(date[2]);
    currentYear = parseInt(new Date().getFullYear());
    currentMonth = parseInt(new Date().getMonth()) + 1;
    currentDay = parseInt(new Date().getDate());


    if (year != currentYear) {
        return false;
    }
    else if (month < currentMonth) {
        return false;
    }
    else if (day < currentDay) {
        return false;
    }

    return true;

}

function birthDateValid(date) {
    date = date.split("-");
    year = parseInt(date[0]);
    currentYear = parseInt(new Date().getFullYear());

    if (year > currentYear) {
        return false;
    }

    return true;

}
