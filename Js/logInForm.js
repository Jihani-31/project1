const form = document.getElementById("form");

const username = document.getElementById("username");
const password = document.getElementById("password");


form.addEventListener( 'submit', (e)=>{
e.preventDefault();
checkInputs();
});


function checkInputs(){
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  //Check Username is Valid

  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank");
  } else if (usernameValue.length < 3) {
    setErrorFor(username, "Username too short");
  } else {
    setSuccessFor(username);
  }

  //Check Password is Valid

  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
  } else if (passwordValue.length < 6) {
    setErrorFor(password, "password should contain at least 6 characters");
  } else {
    setSuccessFor(password);
  }
}




function setErrorFor(input, message){
const formGroup = input.parentElement;
const small = formGroup.querySelector("small");
small.innerText = message;
formGroup.className = "form-group error";
}



function setSuccessFor(input){
  const formGroup = input.parentElement;
  formGroup.className = "form-group success";
}