function validateForm() {
    const password = document.getElementById("password").value;
    const confirm_Password = document.getElementById("confirm_password").value;

    if (confirm_Password === password) {
        return true;
    } else {
        alert("Passwords do not match. Please try again.");
        return false;
    }
}