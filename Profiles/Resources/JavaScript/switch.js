function clickDay(){
    document.getElementById("option-1").setAttribute("style","display:flex");
    document.getElementById("day-button").setAttribute("class","upper-button clicked");
    document.getElementById("option-2").setAttribute("style","display:none");
    document.getElementById("rev-button").setAttribute("class","upper-button");
}
function clickRev(){
    document.getElementById("option-2").setAttribute("style","display:flex");
    document.getElementById("day-button").setAttribute("class","upper-button");
    document.getElementById("option-1").setAttribute("style","display:none");
    document.getElementById("rev-button").setAttribute("class","upper-button clicked");
}