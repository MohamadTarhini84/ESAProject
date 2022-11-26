let signupButton=document.getElementById('signup_button');
let check=document.getElementById('popup');

signupButton.addEventListener('click', function (){
        check.setAttribute('style','display:flex');
        setTimeout(function (){
            check.setAttribute('style','display:none');
        },3000)
    })