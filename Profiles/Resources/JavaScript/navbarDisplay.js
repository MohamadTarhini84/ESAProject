let navbar=document.getElementById('name-picture');

window.addEventListener("load", async function() { 

    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId;
    if(urlParams.has('id')){
        patientProfileId=urlParams.get('id');
    } else window.location="/ESAProject/index.php";

    let a = await fetch("./Resources/php/navbar.php");
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    // if(c['id']!=patientProfileId && c['type']!='4'){
    //     window.location="/ESAProject/index.php"
    // }

    if(c['type']=='2'){
        navbar.innerHTML=`<img src="./Resources/Images/doctor.jpg"></a>
        <a href="./doctorProfileEditable.html?id=${c['id']}">${c['name']}</a>`;
      } else {
        navbar.innerHTML=`<img src="./Resources/Images/patient.jpg"></a>
        <a href="./patientProfile.html?id=${c['id']}">${c['name']}</a>`;
      }
    
});