let resendButton = document.querySelector("#resend-button");
let phoneNumber = document.querySelector("#phone-number").value;
let resendP = document.querySelector("#resend-p");

resendButton.addEventListener("click", async function (eventobj) {
    let smsResponse = await sendSMS(phoneNumber);

    if (smsResponse.data.success) {
        resendP.style.color = "green";
        resendP.innerText = "Code SMS Was Resent Successfully";
    }
    else if (smsResponse.data.error) {
        resendP.style.color = "red";
        resendP.innerText = smsResponse.data.error;

    }

});