let form = document.querySelector("#verifynumber-form");

form.addEventListener("submit", async function (event) {
    event.preventDefault();
    let digit1 = document.querySelector("#field1").value;
    let digit2 = document.querySelector("#field2").value;
    let digit3 = document.querySelector("#field3").value;
    let digit4 = document.querySelector("#field4").value;
    let code = digit1 + digit2 + digit3 + digit4;
    let userName = document.querySelector("#name").value;
    let userEmail = document.querySelector("#email").value;

    let verifyResponse = await axios.get("http://localhost/DentalClinic/routes/verifycode.route.php?code=" + code + "&name=" + userName + "&email=" + userEmail);
    console.log(verifyResponse);
    if (verifyResponse.data.success) {
        window.location.href = "home.php";
    }
    else if (verifyResponse.data.error) {
        //display the error in the verify code page
        let verifyErrorP = document.querySelector("#verify-error-p");
        verifyErrorP.innerText = verifyResponse.data.error;
    }




});