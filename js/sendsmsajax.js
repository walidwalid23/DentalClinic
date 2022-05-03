async function sendSMS(phoneNumber) {

    try {
        serverResponse = await axios.get("http://localhost/DentalClinic/routes/sendsms.route.php?phonenumber=" + phoneNumber);

        return serverResponse;

    }
    catch (error) {
        document.write('<h3 style="color:red">Error occured:' + error + '</h3>');
    }


}

