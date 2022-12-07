let drInfo=document.querySelectorAll('.Dr-information');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/drInfo.php")
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    drInfo[0].innerHTML=c.fname+" "+c.lname;
    drInfo[1].innerHTML=c.birthday;
    drInfo[2].innerHTML=c.gender;
    drInfo[3].innerHTML=c.phone;
    drInfo[4].innerHTML=c.room;
    drInfo[5].innerHTML=c.licence;
    drInfo[6].innerHTML=c.specialty;
});