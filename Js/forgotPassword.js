const form = document.getElementById("form");

const username = document.getElementById("username");
const email = document.getElementById("email");


form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});


function checkInputs() {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();

    //Check Username is Valid

    if (usernameValue === "") {
        setErrorFor(username, "Username cannot be blank");
    } else if (usernameValue.length < 3) {
        setErrorFor(username, "Username too short");
    } else {
        setSuccessFor(username);
    }

    //Check Password is Valid

    const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (emailValue === "") {
        setErrorFor(email, "Password cannot be blank");
    } else if (re.test(emailValue)) {
        setSuccessFor(email);
    } else {
        setErrorFor(email, "Should enter a valid email");
    }
}




function setErrorFor(input, message) {
    const formGroup = input.parentElement;
    const small = formGroup.querySelector("small");
    small.innerText = message;
    formGroup.className = "form-group error";
}



function setSuccessFor(input) {
    const formGroup = input.parentElement;
    formGroup.className = "form-group success";
}