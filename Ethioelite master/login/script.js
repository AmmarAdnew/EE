// const signupForm = document.getElementById("signup-form");
// const nameInput = document.getElementById("name-input");
// const nameInput1 = document.getElementById("name-input1");
// const emailInput = document.getElementById("email-input");
// const passwordInput = document.getElementById("password-input");
// const confirmPasswordInput = document.getElementById("confirm-password-input");
// const signupBtn = document.getElementById("signup-btn");
// const signinBtn = document.getElementById("signin-btn");
// const title = document.getElementById("title");

// signinBtn.onclick = function() {
//     nameInput.style.display = "none";
//     nameInput1.style.display = "none";
//     confirmPasswordInput.style.display = "none";
//     title.innerHTML = "Sign In";
//     signinBtn.classList.add("disable");
//     signupBtn.classList.remove("disable");
//     emailInput.style.display = "block";
// }

// signupBtn.onclick = function() {
//     nameInput.style.display = "block";
//     nameInput1.style.display = "block";
//     confirmPasswordInput.style.display = "block";
//     title.innerHTML = "Sign Up";
//     signupBtn.classList.add("disable");
//     signinBtn.classList.remove("disable");
//     emailInput.style.display = "block";
// }

// signupForm.addEventListener("submit", validateSignUp);

// function validateSignUp(event) {
//     event.preventDefault();

//     const nameValue = nameInput.value.trim();
//     const emailValue = emailInput.value.trim();
//     const passwordValue = passwordInput.value.trim();
//     const confirmPasswordValue = confirmPasswordInput.value.trim();

//     if (nameValue === "" || emailValue === "" || passwordValue === "" || confirmPasswordValue === "") {
//         alert("Please fill in all fields.");
//         return;
//     }

//     if (passwordValue !== confirmPasswordValue) {
//         alert("Passwords do not match.");
//         return;
//     }


//     alert("Sign up successful!");
//     signupForm.reset();
// }
const signupForm = document.getElementById("signup-form");
const nameInput = document.getElementById("name-input");
const nameInput1 = document.getElementById("name-input1");
const emailInput = document.getElementById("email-input");
const phoneInput = document.getElementById("phone-input");
const genderInput = document.getElementById("gender-input");
const departmentInput = document.getElementById("department-input");
const passwordInput = document.getElementById("password-input");
const confirmPasswordInput = document.getElementById("confirm-password-input");
const signupBtn = document.getElementById("signup-btn");
const signinBtn = document.getElementById("signin-btn");
const title = document.getElementById("title");

document.body.onload= function() {
    nameInput.style.display = "none";
    nameInput1.style.display = "none";
    phoneInput.style.display = "none";
    genderInput.style.display = "none";
    departmentInput.style.display = "none";
    confirmPasswordInput.style.display = "none";
    title.innerHTML = "Sign In";
    signinBtn.classList.remove("disable");
    signupBtn.classList.add("disable");
    emailInput.style.display = "block";
    // signupForm.reset();
}

signinBtn.onclick = function() {
    nameInput.style.display = "none";
    nameInput1.style.display = "none";
    phoneInput.style.display = "none";
    genderInput.style.display = "none";
    departmentInput.style.display = "none";
    confirmPasswordInput.style.display = "none";
    title.innerHTML = "Sign In";
    signinBtn.classList.remove("disable");
    signupBtn.classList.add("disable");
    emailInput.style.display = "block";
    // signupForm.reset();
}

signupBtn.onclick = function() {
    nameInput.style.display = "block";
    nameInput1.style.display = "block";
    phoneInput.style.display = "block";
    genderInput.style.display = "block";
    departmentInput.style.display = "block";
    confirmPasswordInput.style.display = "block";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable");
    emailInput.style.display = "block";
    // signupForm.reset();
}

signupForm.addEventListener("submit", validateSignUp);
function validateSignUp(event) {
    event.preventDefault();

    const nameValue = nameInput.value.trim();
    const emailValue = emailInput.value.trim();
    const phoneValue = phoneInput.value.trim();
    const genderValue = genderInput.value;
    const departmentValue = departmentInput.value.trim();
    const passwordValue = passwordInput.value.trim();
    const confirmPasswordValue = confirmPasswordInput.value.trim();

    if (nameValue === "" || emailValue === "" || phoneValue === "" || genderValue === "" || departmentValue === "" || passwordValue === "" || confirmPasswordValue === "") {
        alert("Please fill in all fields.");
        return;
    }

    if (!validatePhoneNumber(phoneValue)) {
        alert("Please enter a valid phone number.");
        return;
    }

    if (passwordValue !== confirmPasswordValue) {
        alert("Passwords do not match.");
        return;
    }

    // Perform further validation or submit the form
    alert("Sign up successful!");
    signupForm.reset();
}

function validatePhoneNumber(phoneNumber) {
    const phoneRegex = /^\d{10}$/; // Regular expression to match a 10-digit phone number

    return phoneRegex.test(phoneNumber);
}



