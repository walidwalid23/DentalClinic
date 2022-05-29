let form = document.querySelector("#verifynumber-form");

form.addEventListener("submit", async function (event) {
    event.preventDefault();
    let digit1 = document.querySelector("#field1").value;
    let digit2 = document.querySelector("#field2").value;
    let digit3 = document.querySelector("#field3").value;
    let digit4 = document.querySelector("#field4").value;
    let code = digit1 + digit2 + digit3 + digit4;

    if (document.querySelector("#signup-verify")) {
        //verifying sign up number
        let userName = document.querySelector("#name").value;
        let userEmail = document.querySelector("#email").value;

        let verifyResponse = await axios.get("http://localhost/DentalClinic/routes/verifycode.route.php?code=" + code + "&name=" + userName + "&email=" + userEmail +
            "&fromsignup=" + true);
        console.log(verifyResponse);
        if (verifyResponse.data.success) {
            window.location.href = "home.php";
        }
        else if (verifyResponse.data.error) {
            //display the error in the verify code page
            let verifyErrorP = document.querySelector("#verify-error-p");
            verifyErrorP.innerText = verifyResponse.data.error;
        }

    }
    else {
        //verifying appointment scheduling number
        let userName = document.querySelector("#name").value;
        let userGender = document.querySelector("#gender").value;
        let userNumber = document.querySelector("#number").value;
        let userAge = document.querySelector("#age").value;
        let date = document.querySelector("#date").value;
        let time = document.querySelector("#time").value;

        let verifyResponse = await axios.get("http://localhost/DentalClinic/routes/verifycode.route.php?code=" + code + "&name=" + userName + "&gender=" + userGender
            + "&number=" + userNumber + "&age=" + userAge + "&date=" + date + "&time=" + time + "&fromappointment=" + true);
        console.log(verifyResponse);
        if (verifyResponse.data.success) {
            alert("Your Appointment Is Scheduled Successfully And You Shall Receive A Call Soon");
        }
        else if (verifyResponse.data.error) {
            //display the error in the verify code page
            let verifyErrorP = document.querySelector("#verify-error-p");
            verifyErrorP.innerText = verifyResponse.data.error;
        }

    }





});