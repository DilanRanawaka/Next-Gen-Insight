function validate() {
    var password = document.form1.Pass.value;
    var confirmpassword = document.form1.Cpass.value;
    var phone = document.form1.Phone.value;

    if (isNaN(phone) || phone.length != 10) {
        alert("Not a valid phone number");
    }

    if (password != confirmpassword) {
        alert("Pasword confirmation failed");
    }
}