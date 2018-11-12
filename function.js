function validate() {
    var name = document.forms.firstname;
    if (name.value == "") {
        alert("Please insert your first name");
        name.focus();
        return false;
        
    }
    var name = document.forms.lastname;
    if (name.value == "") {
        alert("Please insert your last name");
        name.focus();
        return false;
        
    }
    var email = document.forms.email;
    if (email.value == "") {
        alert("Please insert your email address");
        email.focus();
        return false;
        
    }
    var tel = document.myForm.tel;
    if (tel.value == "" || isNaN(tel.value)) {
        alert("Phone number should be numeric.");
        tel.focus();
        return false;
    }

    if (tel.value.length != 11) {
       alert("Phone number should be exactly 11 digits.");
       tel.focus();
       return false;
    }
    var country = document.forms.country;
    if(country.value == "-1"){
        alert("Please select your country");
        return false;
    }
    return true;


       

}