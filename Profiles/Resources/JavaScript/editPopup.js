let edit=document.getElementById('profile-edit-button');
let insideEdit=document.querySelectorAll('.edit-popup-element');

edit.addEventListener('click', async function() { 
    let a = await fetch("./Resources/php/drInfo.php")
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    insideEdit[0].innerHTML=c.name;
    insideEdit[1].innerHTML=c.email;
    insideEdit[3].value=c.name;
    insideEdit[4].value=c.licence;
    insideEdit[5].value=c.email;
    insideEdit[6].value=c.phone;
    insideEdit[9].value=c.specialty;
    insideEdit[10].value=c.room;
});