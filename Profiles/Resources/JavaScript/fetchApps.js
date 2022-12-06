let appInfo=document.querySelectorAll('.app-information');
let confirm=document.querySelector('.confirm-app');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/fetchApps.php");
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    appInfo[0].innerHTML=c.date+" at "+c.time;
    appInfo[1].innerHTML=c.name;
    appInfo[2].innerHTML=c.phone;
    appInfo[3].innerHTML=c.room;
    appInfo[4].innerHTML=c.isConfirmed;
    appInfo[5].innerHTML=c.desc;

    if(c.isConfirmed==true){
        confirm.innerHTML='<i class="fa-solid fa-calendar-days" style="margin-right:5px"></i><span>Reschedule</span>';
    }
});