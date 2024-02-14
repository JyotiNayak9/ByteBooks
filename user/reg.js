function validateForm() {
    var fullname = document.getElementById("full_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    var isValid = true;

    // Reset error messages
    document.getElementById("fullNameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";

    // Check if full name is empty
    if (fullname.trim() == "") {
        document.getElementById("fullNameError").innerHTML = "Please enter your full name";
        isValid = false;
    }

    // Check if email is empty
    if (email.trim() == "") {
        document.getElementById("emailError").innerHTML = "Please enter your email";
        isValid = false;
    } else {
        // Check if email is valid using a simple pattern
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address";
            isValid = false;
        }
    }

    // Check if password is empty
    if (password.trim() == "") {
        document.getElementById("passwordError").innerHTML = "Please enter a password";
        isValid = false;
    } else if (password.length < 6) { // Check if password meets minimum length criteria
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters long";
        isValid = false;
    }

    // Check if confirm password matches password
    if (confirmPassword.trim() == "") {
        document.getElementById("confirmPasswordError").innerHTML = "Please confirm your password";
        isValid = false;
    } else if (password !== confirmPassword) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        isValid = false;
    }

    return isValid;
}