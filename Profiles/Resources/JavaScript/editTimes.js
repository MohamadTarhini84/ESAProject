let times=document.querySelectorAll('edit-times');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/fetchTimes.php")
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    
    // times[0].value=c.startTime;
    // times[1].value=c.endTime;
    
});