let appointDate=document.getElementById('dr-app-date');
let appointTime=document.getElementById('dr-app-time');
let appointDesc=document.getElementById('dr-app-desc');
let appForm=document.getElementById('app-popup-lower');
    
appForm.addEventListener('submit',function (e){
    e.preventDefault();

    
    let appDate=appointDate.value;
    let appTime=appointTime.value;
    let appDesc=appointDesc.value;

    if(appDate=="" || appTime=="" || appTime=="Choose day first" || appTime=="Choose time"){
        alert("Please enter a date and time!");
        return;
    }

    if(appDesc==""){
        appDesc="No Description Provided.";
    }


        $.ajax({
            type: "POST",
            url: "./Resources/php/makeApp.php",
            dataType: "json",
            data: {date:appDate,time:appTime,desc:appDesc}
        }).then(function(data){
                // let data =JSON.parse(result);
                if (data.code == "200"){
                    // console.log(data.msg);
                    coolPopup();
                    toggle('app-popup');
                } else if(data.code=='201'){
                    toggle('app-popup');
                    alert("You already have an appointment with this doctor!");
                } else {
                    console.log(data.msg);
                }
            }
        );
});