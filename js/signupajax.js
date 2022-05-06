async function signUpUser(name, gender, birthDate, phonenumber, email, password) {
    try {
        let serverResponse = await axios.post("http://localhost/DentalClinic/routes/signup.route.php",
            {
                nameKey: name, genderKey: gender, birthDateKey: birthDate, phonenumberKey: phonenumber,
                emailKey: email, passwordKey: password
            });

        return serverResponse;

    }
    catch (error) {
        document.write('<h3 style="color:red">Error occured:' + error + '</h3>');
    }

}

