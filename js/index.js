//First : GetElementById
// const closeButton = document.getElementById('x_button');



//Second: GetElementsByClassName
// const closeButton = document.getElementsByClassName('close')[0];

//Changing the innerHTML attribute value
// closeButton.innerHTML = "<span aria-hidden='true'>&plus;</span>"

//Third: 
//(a) querySelector using id use #
// const closeButton = document.querySelector('button#x_button');
// querySelector using class
// const closeButton = document.querySelector('button.close');
// (b) returns a nodeList 
// const nodeList = document.querySelectorAll('button');

// nodeList.forEach(node => {
//     console.log(node);
// });

// console.log(closeButton);

// closeButton.onclick = function () {
//     const dismissibleAlert = document.querySelector("div.alert-dismissible");
//     console.log(dismissibleAlert);
//     dismissibleAlert.style.display = "none";
// }

//Validate sign up form
const signUpForm = document.getElementById('sign-up-form');
const firstNameInput = document.getElementById('first-name');
let firstName = firstNameInput.value;

const submitSignUpButton = signUpForm.querySelector('button[name="submit"]');

submitSignUpButton.onclick = function(submitEnv) {
    //Prevent default submit
    submitEnv.preventDefault();
    if(firstName == '') {
        document.querySelector('div.container').insertAdjacentHTML('afterbegin',"<div class='alert alert-danger alert-dismissible'>You must fill first name<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span></button></div>");
    }

    //validate email

    //form is sent
}


