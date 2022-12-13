let appss=document.getElementById('appointmentss');
let descpp=document.getElementById('desc-pp-text');
let delFormm=document.getElementById('delete-form');

window.addEventListener("load", async function() { 
    let a = await fetch("./Resources/php/fetchApps.php?type=pat");
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(b);
    if(c.bob==-1){
        apps.innerHTML=`
            <div id="no-apps-question-mark">
                You don't have any active appointments!
            </div>
        `;
        return;
    }
    let conf;

    c.forEach(function(element) {
        if(element['isConfirmed']==false){
            conf="Pending";
        } else {
            conf="Confirmed";
        }

        let dateStr=element['date']+"T"+element['time'];
        let appDate=new Date(dateStr);
        let appDateStr= appDate.toString().substring(0,24);

        appss.innerHTML+=`
        <div class="appointment">
            <div class="app-top">
                <i class="fa-regular fa-clock"></i>
                <span class="app-information">${appDateStr}</span>
            </div>
            <div class="app-mid">
                <div class="name-desc">
                    <div>
                        <div class="app-name app-information">
                            ${element['drName']}
                        </div>
                        <div class="app-info app-information">
                            ${element['drSpec']}
                        </div>
                    </div>
                    <button class="app-desc" onclick="descpp.innerHTML='${element['desc']}';toggle('desc-popup')">
                        show description
                    </button>
                </div>
                <div class="app-triple">
                    <div class="app-room">
                        <div class="app-name">
                            Room
                        </div>
                        <div class="app-info app-information" style="font-size:16px;">
                            ${element['room']}
                        </div>
                    </div>
                    <div class="app-status">
                        <div class="app-name">
                            Status
                        </div>
                        <div class="app-info app-information">
                            ${conf}
                        </div>
                    </div>
                    <button class="app-call" onclick="navigator.clipboard.writeText(${element['drPhone']});alert('Phone number copied to clipboard!')">
                        <i class="fa-solid fa-phone"></i>
                    </button>
                </div>
            </div>
            <div class="app-edit-delete">
                <button class="app-button">
                    <span>${conf}</span>
                </button>
                <button class="app-button delete-one-app" onclick="toggle('confirm-popup');delFormm.setAttribute('href','Resources/php/deleteApp.php?id=1&del=${element['id']}')" style="border-left:1px solid var(--light)">
                    <i class="fa-solid fa-trash"></i>
                    Cancel
                </button>
            </div>
        </div>
        `;
    });
});