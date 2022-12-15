let gNB=document.getElementById('name-picture');

window.addEventListener("load", async function() { 
    let a = await fetch("/ESAProject/Profiles/Resources/php/navbar.php");
    let b=await a.text();
    let c=JSON.parse(b);
    console.log(b);

    if(c.bob==-1){
        gNB.innerHTML="";
    } else{
        if(c['type']=='101'){
            gNB.innerHTML=`<img src="/ESAProject/Profiles/Resources/Images/doctor.jpg"></a>
            <a href="/ESAProject/Profiles/doctorProfile.html?id=${c['id']}">${c['name']}</a>`;
        } else {
            gNB.innerHTML=`<img src="/ESAProject/Profiles/Resources/Images/patient.jpg"></a>
            <a href="/ESAProject/Profiles/patientProfile.html?id=${c['id']}">${c['name']}</a>`;
        }
    }
});