
editAppDesc.addEventListener('submit', async function(e) {
    e.preventDefault(); 
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');
    const data = {
        id: editAppDsc.classList.value,
        desc:editAppDsc.value,
    };

    fetch('./Resources/php/editAppDesc.php', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(() => {
            alert("Description edited successfully!");
        })
    toggle('edit-app-popup');
});