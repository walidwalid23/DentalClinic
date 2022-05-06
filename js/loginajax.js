async function loginUser(email, password, rememberMe) {
    try {
        let serverResponse = await axios.post("http://localhost/DentalClinic/routes/login.route.php",
            {
                emailKey: email, passwordKey: password, rememberMeKey: rememberMe

            });

        return serverResponse;

    }
    catch (error) {
        document.write('<h3 style="color:red">Error occured:' + error + '</h3>');
    }

}

