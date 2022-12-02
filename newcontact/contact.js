/*const form=document.getElementById('form');
const userName=document.getElementById('userName');
const email=document.getElementById('email');
const text=document.getElementById('text');
form.addEventListener('submit', e => {
   e.preventDefault(); 
   validateInputs();
});
const setError= (element,message) => {
    const inputControl=element.parentElement;
    const errorDisplay=inputControl.querySelector('.error');
    errorDisplay.innerText=message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');

}
 const isValidEmail= email=>{
    const re=(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value))
    return re.test(string(email).toLowerCase());
 }

const setSuccess=element=>{
    const inputControl=element.parentElement;
    const errorDisplay=inputControl.querySelector('.error');
    errorDisplay.innerText='';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}
const validateInputs = ()=>{
const userNameValue=userName.value.trim();
const emailValue=email.value.trim();
if(userNameValue ===' '){
 setError(userName,"Username is required");
}else{
    setSuccess(userName);
}

if(emailValue ===' '){
    setError(email,"email is requird");
}
else if(!isValidEmail(emailValue)){
    setError(email,'provide a valid email adress')
}else{
    setSuccess(email);
}
};*/
const errorname = document.getElementById('errorname');
const erroremail= document.getElementById('erroremail');
const errormessage = document.getElementById('errormessage');
const errorsubmit = document.getElementById('errorsubmit');

function validateName(){
    const name=document.getElementById('name').value;
    if(name.lenght===0){
        errorname.innerHTML="Name is required";
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
       errorname.innerHTML="Write full name"
        return false;
    }
    errorname.innerHTML='<i class="fa fa-check-circle" aria-hidden="true" style="color:#16a085;"></i>';
    return true;
}
function validateEmail(){
    var email=document.getElementById('email').value;
    if(email.lenght===0){
        erroremail.innerHTML="Email is required";
        return false ;
    }
    if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        erroremail.innerHTML=" Email Invalid";
        return false;
    }
    
        erroremail.innerHTML='<i class="fa fa-check-circle" aria-hidden="true" style="color:#16a085;"></i>';
        return true ;
}
function validateText() {
    var message=document.getElementById('message').value;
    
    
    if(message.lenght < 30)
    {
        errormessage.innerHTML= 'more characters required';
        return false;
    }

  errormessage.innerHTML='<i class="fa fa-check-circle" aria-hidden="true" style="color:#16a085;"></i> ';
   return true;
}
function validateForm(){
    if(!validateName() || !validateEmail() || !validateText()){
        errorsubmit.style.display='block';
        errorsubmit.innerHTML='please fix error to submit';
        setTimeout(function(){errorsubmit.stytle.display='none';},3000);
        return false;
    }
}
