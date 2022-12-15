let drInfo=document.querySelectorAll('.Dr-information');
let drInfoName=document.querySelectorAll('.dr-info-name');
let drInfoSpec=document.querySelectorAll('.dr-info-spec');
let drInfoAvg=document.getElementById('rating-number');
let drInfoStars=document.getElementById('rating-stars');
let allFormInputs=document.querySelectorAll('input[type="time"]');

window.addEventListener("load", async function() { 
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let a = await fetch("./Resources/php/drInfo.php?id="+patientProfileId);
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
    drInfoAvg.innerHTML=c.rating;

    drInfoName.forEach((e)=>{
        e.innerHTML=c.name;
    })

    drInfoSpec.forEach((e)=>{
        e.innerHTML=c.specialty;
    })

    if(c.rating>=5){
        drInfoStars.innerHTML=`   
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        `;
    } else if(c.rating>=4){
        drInfoStars.innerHTML=`
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        `;
    } else if(c.rating>=3){
        drInfoStars.innerHTML=`
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        `;
    } else if(c.rating>=2){
        drInfoStars.innerHTML=`
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        `;
    } else if(c.rating>=1){
        drInfoStars.innerHTML=`
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        `;
    } else {
        drInfoStars.innerHTML=`
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        `;
    }
});

window.addEventListener("load", async function() { 
    
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let a = await fetch("./Resources/php/fetchTimes.php?id="+patientProfileId);
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(c);

    let i=0;
    c.forEach((time)=>{
            allFormInputs[i].value=time.startTime;
            i++;
            allFormInputs[i].value=time.endTime;
            i++;
    }); 
});