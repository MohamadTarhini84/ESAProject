let check=document.getElementById('popup');

function coolPopup()
{
    check.setAttribute('style','display:flex');
    setTimeout(function (){
        check.setAttribute('style','display:none');
    },2000)
}