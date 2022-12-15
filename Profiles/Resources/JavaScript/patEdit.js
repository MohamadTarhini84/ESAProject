let edit=document.getElementById('profile-edit-button');

edit.addEventListener('click', async function() { 
    
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let a = await fetch("./Resources/php/patInfo.php?id="+patientProfileId);
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    patPInfo[4].innerHTML=c.name;
    patPInfo[5].innerHTML=c.email;
    patPInfo[6].value=c.name;
    patPInfo[8].value=c.email;
    patPInfo[9].value=c.phone;

    toggle('edit-popup');
});