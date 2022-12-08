// let date1=new Date();
// date1.setHours(9,0);
// let date2=new Date();
// date1.setHours(16,0);

// let timeInput=document.querySelectorAll('.edit-times');


// function validateTimes(a){
//     if(!timeInput[a].value){
//         timeInput[a].setAttribute('style','border:1px solid red;');
//         alert("Please enter a value for the first field");
//     } else{
//         timeInput[a].setAttribute('style','border:1px solid black;');
//     }
//     if(!timeInput[a+1].value){
//         timeInput[a+1].setAttribute('style','border:1px solid red;');
//         alert("Please enter a value for the second field");
//     } else{
//         timeInput[a+1].setAttribute('style','border:1px solid black;');
//     }
//     // console.log(dateInput.getHours());
//     if(parseInt(timeInput[a].value)>=date1.getHours() || parseInt(timeInput[a].value)<date2.getHours()
//         && parseInt(timeInput[a+1].value)>=date1.getHours() || parseInt(timeInput[a+1].value)<date2.getHours())
//     {
//         console.log("test")
//         var name = timeInput[a].val();
//         var email = timeInput[a+1].val();


//         $.ajax({
//             type: "POST",
//             url: "./Resources/php/processTimes.php",
//             dataType: "json",
//             data: {startTime:name, endTime:email},
//             success : function(data){
//                 if (data.code != "200"){
//                     alert("Success: ");
//                 } else {
//                     console.log(data.msg);
//                 }
//             }
//         });
//     } else {
//         console.log('Time has to be between 9:00 AM and 4:00 PM');
//     }
// };