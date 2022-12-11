let timeForms=document.querySelectorAll('.grid-form');
    
timeForms.forEach((form)=>{
    form.addEventListener('submit',function (e){
        e.preventDefault();

        let timeInput=form.childNodes[3].childNodes;
        let whichDay=form.childNodes[1].innerHTML;
        let startTimeInt=parseInt(timeInput[3].value.substring(0,2))+parseInt(timeInput[3].value.substring(3))/100;
        let endTimeInt=parseInt(timeInput[7].value.substring(0,2))+parseInt(timeInput[7].value.substring(3))/100;
        
        if(startTimeInt>=9 && endTimeInt<=16 && startTimeInt<endTimeInt){
            timeInput[3].setAttribute('style','border:1px solid var(--light);');
            timeInput[7].setAttribute('style','border:1px solid var(--light);');
    
    
            $.ajax({
                type: "POST",
                url: "./Resources/php/processTimes.php",
                dataType: "json",
                data: {day:whichDay,startTime:timeInput[3].value, endTime:timeInput[7].value}
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
            timeInput[3].setAttribute('style','border:1px solid red;');
            timeInput[7].setAttribute('style','border:1px solid red;');
            alert('Time has to be between 9:00 AM and 4:00 PM and Start Time has to be less than End Time');
        }
    })
});