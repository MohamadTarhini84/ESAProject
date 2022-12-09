let drInfo=document.querySelectorAll('.Dr-information');
let drInfoName=document.querySelectorAll('.dr-info-name');
let drInfoSpec=document.querySelectorAll('.dr-info-spec');
let drInfoAvg=document.getElementById('rating-text');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/drInfo.php")
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    drInfo[0].innerHTML=c.name;
    drInfo[1].innerHTML=c.birthday;
    drInfo[2].innerHTML=c.gender;
    drInfo[3].innerHTML=c.phone;
    drInfo[4].innerHTML=c.room;
    drInfo[5].innerHTML=c.licence;
    drInfo[6].innerHTML=c.specialty;

    drInfoName.forEach((e)=>{
        e.innerHTML=c.fname+" "+c.lname;
    })

    drInfoSpec.forEach((e)=>{
        e.innerHTML=c.specialty;
    })

    drInfoAvg=c.rating;
});