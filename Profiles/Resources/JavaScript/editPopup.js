let edit=document.getElementById('profile-edit-button');
let insideEdit=document.querySelectorAll('.edit-popup-element');

edit.addEventListener('click', async function() { 
    let a = await fetch("./Resources/php/drInfo.php")
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    insideEdit[0].innerHTML=c.fname+" "+c.lname;
    insideEdit[1].innerHTML=c.email;
    insideEdit[2].value=c.fname;
    insideEdit[3].value=c.lname;
    insideEdit[4].value=c.email;
    insideEdit[5].value=c.phone;
    insideEdit[6].value=c.specialty;
    insideEdit[7].value=c.room;
});