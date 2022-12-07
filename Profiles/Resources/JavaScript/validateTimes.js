let min=new Date();
let max=new Date();
min.setHours(9,30,0);
max.setHours(16,0,0);

let day=document.querySelectorAll('.grid-button');
let children=document.querySelectorAll('.edit-times');


day.forEach((e)=>{e.addEventListener('click',function (a){

    children[1].value='09:00';
    console.log(children[0].value);

    // let start=children[1].value;
    // let end=children[3].value;
})});