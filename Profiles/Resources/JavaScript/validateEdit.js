let editForm=document.getElementById('app-popup-lower');
    
editForm.addEventListener('submit',function (e){
    e.preventDefault();

    let fullName=insideEdit[3].value;
    let licenceID=insideEdit[4].value;  
    let email=insideEdit[5].value;
    let phone=insideEdit[6].value;
    let pass1=insideEdit[7].value;
    let pass2=insideEdit[8].value;
    let specialty=insideEdit[9].value;
    let room=insideEdit[10].value;

    if(pass1===pass2){
        insideEdit[7].setAttribute('style','border: 1px solid var(--light);');
        insideEdit[8].setAttribute('style','border: 1px solid var(--light);');
        $.ajax({
            type: "POST",
            url: "./Resources/php/edit.php",
            dataType: "json",
            data: {name:fullName,licence:licenceID, email:email, phone:phone, pass:pass1, spec:specialty, room:room}
        }).then(
            function(data){
                // let data =JSON.parse(result);
                if (data.code == "200"){
                    coolPopup();
                    toggle('edit-popup');
                } else {
                    console.log(data.msg);
                }
            }
        );
    } else{
        insideEdit[7].setAttribute('style','border:1px solid red');
        insideEdit[8].setAttribute('style','border:1px solid red');

        alert("Please make sure you've re-entered the password correctly!");
    }
});