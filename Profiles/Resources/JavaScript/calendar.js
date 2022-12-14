let calendarStartTimes=[];
let calendarEndTimes=[];
let appDateInput=document.getElementById('dr-app-date');

document.addEventListener('DOMContentLoaded', async function() {
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let a = await fetch("./Resources/php/fetchTimes.php?id="+patientProfileId);
    let b=await a.text();
    let c=JSON.parse(b);
    // console.log(c);

    c.forEach((time)=>{
            calendarStartTimes.push(time.startTime);
            calendarEndTimes.push(time.endTime);
    }); 

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        allDaySlot:false,
        slotMinTime: "08:00:00",
        slotMaxTime: "17:00:00",
        aspectRatio: 1.9,
        eventStartEditable:false,
        firstDay: 1,
        events:[
            {
                title:"Day Off",
                daysOfWeek:['0'],
                startTime: "08:00:00",
                endTime: "17:00:00",
                color: 'red'
            },
            {
                title:"Monday Schedule",
                daysOfWeek:['1'],
                startTime: calendarStartTimes[0],
                endTime: calendarEndTimes[0]
            },
            {
                title:"Tuesday Schedule",
                daysOfWeek:['2'],
                startTime: calendarStartTimes[1],
                endTime: calendarEndTimes[1]
            },
            {
                title:"Wednesday Schedule",
                daysOfWeek:['3'],
                startTime: calendarStartTimes[2],
                endTime: calendarEndTimes[2]
            },
            {
                title:"Thirsday Schedule",
                daysOfWeek:['4'],
                startTime: calendarStartTimes[3],
                endTime: calendarEndTimes[3]
            },
            {
                title:"Friday Schedule",
                daysOfWeek:['5'],
                startTime: calendarStartTimes[4],
                endTime: calendarEndTimes[4]
            },
            {
                title:"Saturday Schedule",
                daysOfWeek:['6'],
                startTime: calendarStartTimes[5],
                endTime: calendarEndTimes[5]
            }
        ],
        eventClick: function(info){
            toggle('app-popup');
            appDateInput.value=info.event.startStr.substring(0,10);
            loadAvailableTimes();
        }
    });
    calendar.render();
});