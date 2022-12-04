let min=new Date();
let max=new Date();
min.setHours(9,30,0);
max.setHours(16,0,0);

function validateTimes(a){
    let day=document.getElementsByClassName('grid-edit-times');
    let children=day[a].children;

    let start=children[1].value;
    let end=children[3].value;
}