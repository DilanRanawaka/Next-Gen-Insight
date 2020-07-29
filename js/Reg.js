function checkform() {

    var email = document.form.Email.value;
    var password = document.form.Pass.value;
    var phone = document.form.Phone.value;
    var confirmpassword = document.form.Cpass.value;
    var NIC = document.form.Identity.value;
    var Passpost = document.form.Pnum.value;
    var country = document.form.Country.value;

    if (isNaN(phone) || phone.length != 10) {
        alert("Not a valid phone number");
        return false;
    }

    if (password != confirmpassword) {
        alert("Pasword confirmation failed");
        return false;
    }
    if (isNaN(NIC) || NIC.length != 12) {
        alert("Not a valid NIC number");
        return false;
    }
    if ((country != "Sri Lanka") && (Passport == "")) {
        alert("Please enter your passport number");
    }
}