let navbar=document.getElementById('name-picture');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/navbar.php");
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);

    navbar.innerHTML=c;
    
});