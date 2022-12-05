let blur=document.getElementById('page');


function toggle(element){
    blur.classList.toggle('active');
    let popup=document.getElementById(element);
    popup.classList.toggle('active');
}