// let appInfo=document.querySelectorAll('.app-information');
// let confirm=document.querySelector('.confirm-app');
let apps=document.getElementById('appointments');
let desc=document.getElementById('desc-popup-text');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/fetchApps.php");
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(c);

    let conf;

    c.forEach(function(element) {
        if(element.isConfirmed==true){
            conf="Confirmed";
        } else {conf="Pending";}

        let dateStr=element['date']+"T0"+element['time'];
        let appDate=new Date(dateStr);
        let appDateStr= appDate.toString().substring(0,24);

        apps.innerHTML+=`
        <div class="appointment">
        <div class="app-top">
        <i class="fa-regular fa-clock"></i>
        <span class="app-information">`+appDateStr+`</span>
        </div>
        <div class="app-mid">
            <div class="name-desc">
                <div>
                    <div class="app-name app-information">
                        `+element['name']+`
                    </div>
                    <div class="app-info app-information">
                        `+element['phone']+`
                    </div>
                </div>
                <button class="app-desc" onclick="desc.innerHTML='`+element['desc']+`';toggle('desc-popup')">
                    show description
                </button>
            </div>
            <div class="app-triple">
                <div class="app-room">
                    <div class="app-name">
                        Room
                    </div>
                    <div class="app-info app-information" style="font-size:16px">
                        `+element['room']+`
                    </div>
                </div>
                <div class="app-status">
                    <div class="app-name">
                        Status
                    </div>
                    <div class="app-info app-information">
                        `+conf+`
                    </div>
                </div>
            </div>
        </div>
        <div class="app-edit-delete">
        <button class="app-button confirm-app">
            <i class="fa fa-duotone fa-check"></i>
            <span>Confirm</span>
        </button>
        <button class="app-button delete-one-app" onclick="toggle('confirm-popup')" style="border-left:1px solid var(--light)">
            <i class="fa-solid fa-trash"></i>
            Delete
        </button>
        </div>
    </div>
        `;
    });
    
    // appInfo[0].innerHTML=c.date+" at "+c.time;
    // appInfo[1].innerHTML=c.name;
    // appInfo[2].innerHTML=c.phone;
    // appInfo[3].innerHTML=c.room;
    // appInfo[4].innerHTML=c.isConfirmed;
    // appInfo[5].innerHTML=c.desc;

    // if(c.isConfirmed==true){
    //     confirm.innerHTML='<i class="fa-solid fa-calendar-days" style="margin-right:5px"></i><span>Reschedule</span>';
    // }
});