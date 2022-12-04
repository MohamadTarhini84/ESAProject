let blur=document.getElementById('page');


function toggle(element){
    blur.classList.toggle('active');
    let popup=document.getElementsByClassName(element);
    popup[0].classList.toggle('active');
}