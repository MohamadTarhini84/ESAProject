let signupButton=document.getElementById('signup_button');
let check=document.getElementById('popup');
let myFrom=document.getElementsByTagName('form');
var submitTimer;

myFrom[0].addEventListener('submit',submitHandler);

function submitHandler(event) {
    event.preventDefault();
    submitTimer = setTimeout(() => {
    this.submit();
    }, 2000)
};

signupButton.addEventListener('click', function (){
        check.setAttribute('style','display:flex');
        setTimeout(function (){
            check.setAttribute('style','display:none');
        },3000)
    })