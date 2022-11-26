let eye=document.getElementsByClassName('signup_eye');
let passInput=document.getElementById('passInput');

eye[0].addEventListener('click',function (e){
    // console.log(e.target.classList.contains("fa-eye-slash"))
    if(e.target.classList.contains('fa-eye-slash')){
        e.target.setAttribute("class","fa fa-eye signup_eye");
        passInput.setAttribute('type','text');
    } else{
        e.target.setAttribute("class","fa fa-eye-slash signup_eye");
        passInput.setAttribute('type','password');
    }
});