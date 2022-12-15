let editFormm=document.getElementById('app-popup-lower');
    
editFormm.addEventListener('submit',function (e){
    e.preventDefault();

    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let fullName=patPInfo[6].value;  
    let email=patPInfo[8].value;
    let phone=patPInfo[9].value;
    let pass1=patPInfo[10].value;
    let pass2=patPInfo[11].value;

    if(pass1===pass2){
        patPInfo[10].setAttribute('style','border: 1px solid var(--light);');
        patPInfo[11].setAttribute('style','border: 1px solid var(--light);');
        $.ajax({
            type: "POST",
            url: "./Resources/php/patedit.php",
            dataType: "json",
            data: {name:fullName, email:email, phone:phone, pass:pass1, id:patientProfileId}
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
        patPInfo[10].setAttribute('style','border:1px solid red');
        patPInfo[11].setAttribute('style','border:1px solid red');

        alert("Please make sure you've re-entered the password correctly!");
    }
});