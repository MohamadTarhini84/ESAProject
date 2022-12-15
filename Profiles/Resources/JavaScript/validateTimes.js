let timeForms=document.querySelectorAll('.grid-form');
    
timeForms.forEach((form)=>{
    form.addEventListener('submit',function (e){
        e.preventDefault();

    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

        let timeInput1=form.childNodes[3].childNodes[3];
        let timeInput2=form.childNodes[3].childNodes[7];
        let whichDay=form.childNodes[1].innerHTML.toLowerCase();
        let startTimeInt=parseInt(timeInput1.value.substring(0,2))+parseInt(timeInput1.value.substring(3))/100;
        let endTimeInt=parseInt(timeInput2.value.substring(0,2))+parseInt(timeInput2.value.substring(3))/100;
        
        if(startTimeInt>=9 && endTimeInt<=16 && startTimeInt<endTimeInt){
            allFormInputs.forEach((a)=>{
                a.setAttribute('style','border:1px solid var(--light);');
            })
    
            $.ajax({
                type: "POST",
                url: "./Resources/php/processTimes.php",
                dataType: "json",
                data: {day:whichDay,startTime:timeInput1.value, endTime:timeInput2.value, id:patientProfileId}
            }).then(
                function(data){
                    if (data.code == "200"){
                        coolPopup();
                    } else {
                        console.log(data.msg);
                    }
                }
            );
        } else {
            timeInput1.setAttribute('style','border:1px solid red;');
            timeInput2.setAttribute('style','border:1px solid red;');
            alert('Time has to be between 9:00 AM and 4:00 PM and Start Time has to be less than End Time');
        }
    })
});