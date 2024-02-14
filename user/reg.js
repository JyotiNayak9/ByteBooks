function validateForm() {
    var fullname = document.getElementById("full_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    var isValid = true;

    document.getElementById("fullNameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";


    if (fullname.trim() == "") {
        document.getElementById("fullNameError").innerHTML = "Please enter your full name";
        isValid = false;
    }
    if (email.trim() == "") {
        document.getElementById("emailError").innerHTML = "Please enter your email";
        isValid = false;
    } else {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address";
            isValid = false;
        }
    }

    if (password.trim() == "") {
        document.getElementById("passwordError").innerHTML = "Please enter a password";
        isValid = false;
    } else if (password.length < 6) { 
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters long";
        isValid = false;
    }

    if (confirmPassword.trim() == "") {
        document.getElementById("confirmPasswordError").innerHTML = "Please confirm your password";
        isValid = false;
    } else if (password !== confirmPassword) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        isValid = false;
    }

    return isValid;
}