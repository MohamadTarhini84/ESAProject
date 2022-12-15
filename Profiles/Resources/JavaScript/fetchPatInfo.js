let patPInfo=document.querySelectorAll('.pat-information');

window.addEventListener("load", async function() { 

    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');
    
    let a = await fetch("./Resources/php/patInfo.php?id="+patientProfileId);
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    patPInfo[0].innerHTML=c.name;
    patPInfo[1].innerHTML=c.birthday;
    patPInfo[2].innerHTML=c.gender;
    patPInfo[3].innerHTML=c.phone;
});