let array;
let arrayOfApps;
let finalArray;
let date=new Date();
let temp=new Date();

function loadAvailableTimes(){
    let xhr=new XMLHttpRequest();
    
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status=='200'){
            let bigArray=JSON.parse(xhr.responseText);
            let startTime=bigArray[0].startTime.substring(0,5);
            let endTime=bigArray[0].endTime.substring(0,5);

            // console.log(startTime);
            array=[];
            arrayOfApps=[];
            finalArray=[];

            if(bigArray[1]!=undefined){
                for(appoint of bigArray[1]){
                    arrayOfApps.push(appoint.appTime);
                }
            }

            date.setHours(parseInt(startTime.substring(0,2)));
            date.setMinutes(parseInt(startTime.substring(3,5)));


            let hours = date.getHours();
            hours = (/^\d$/.test(hours)) ?"0"+hours:hours;
            let mins = date.getMinutes();
            mins = mins === 0 ? "00" : mins;

            while(`${hours}:${mins}`!=endTime){
                array.push(`${hours}:${mins}`);
                if(parseInt(date.getMinutes())==30){
                    temp.setHours(parseInt(date.getHours())+1);
                    temp.setMinutes(0);
                } else{
                    temp.setHours(parseInt(date.getHours()));
                    temp.setMinutes(30);
                }
                date=temp;
                hours = date.getHours();
                hours = (/^\d$/.test(hours)) ?"0"+hours:hours;
                mins = date.getMinutes();
                mins = mins === 0 ? "00" : mins;
            } 
            
            for(element of array){
                if(arrayOfApps.includes(element)){
                    continue;
                } else{
                    finalArray.push(element);
                }
            }
            // console.log(arrayOfApps);

            if(finalArray.length==0){
                appointTime.innerHTML="<option selected disabled>No Times Available</option>";
            } else{
                appointTime.innerHTML="<option selected disabled>Choose time</option>";
                for(x of finalArray){
                    appointTime.innerHTML+=`
                        <option>${x}</option>
                    `;
                }
            } 

            // console.log(finalArray);
        }
    }

    let dayDate=new Date(appointDate.value);
    let dateStr="?date="+appointDate.value+"&day="+dayDate.getDay();
    xhr.open('GET','./Resources/php/availableTimes.php'+dateStr,true);
    xhr.send();
}

appointDate.addEventListener('blur',loadAvailableTimes);