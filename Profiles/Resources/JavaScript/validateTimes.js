let timeForms=document.querySelectorAll('.grid-form');
    
timeForms.forEach((form)=>{
    form.addEventListener('submit',function (e){
        e.preventDefault();

        let timeInput=form.childNodes[3].childNodes;
        let whichDay=form.childNodes[1].innerHTML;
        
        if(parseInt(timeInput[3].value)>=9 && parseInt(timeInput[7].value)<16
            && parseInt(timeInput[3].value)<parseInt(timeInput[7].value)){
                
            // console.log(timeInput[3].value+"  "+timeInput[7].value);
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