const form = document.getElementById("form");

const nidNumber = document.getElementById("NID-number");
const name = document.getElementById("name");
const birthDate = document.getElementById("birth-date");
const address = document.getElementById("address");
const job = document.getElementById("job");




form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});


function checkInputs() {
    const nidNumberValue = nidNumber.value.trim();
    const nameValue = name.value.trim();
    const birthDateValue = birthDate.value.trim();
    const addressValue = address.value.trim();
    const jobValue = job.value.trim();
    
    //Check NID Number is Valid

    if (nidNumberValue === "") {
        setErrorFor(nidNumber, "NID Number cannot be blank");
    } else if (nidNumberValue.length < 10) {
        setErrorFor(nidNumber, "NID Number too short");
    } else {
        setSuccessFor(nidNumber);
    }

    //Check Name is Valid

    if (nameValue === "") {
        setErrorFor(name, "Name cannot be blank");
    } else if (nameValue.length < 6) {
        setErrorFor(name, "Name too short");
    } else {
        setSuccessFor(name);
    }

//Check Birth date is valid

    if (birthDateValue === "") {
        setErrorFor(birthDate, "Birth date cannot be blank");
   
    } else {
        setSuccessFor(birthDate);
    }



    //Check Birth date is valid

    if (addressValue === "") {
        setErrorFor(address, "Address cannot be blank");
    
    } else {
        setSuccessFor(address);
    }

    //Check Birth date is valid

    if (jobValue === "") {
        setErrorFor(job, "Job Name cannot be blank");
   
    } else {
        setSuccessFor(job);
    }




    function setErrorFor(input, message) {
        const formGroup = input.parentElement;
        const small = formGroup.querySelector("small");
        small.innerText = message;
        formGroup.className = " error";
    }



    function setSuccessFor(input) {
        const formGroup = input.parentElement;
        formGroup.className = " .form success";
    }
}