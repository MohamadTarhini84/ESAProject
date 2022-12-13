let val = document.getElementById('fetchval');

const selt = () => {
    // console.log('ok');

    fetch('./sel.php', {
        method: 'POST', // or 'PUT'
        body: JSON.stringify({
            fetchval: val.value,
        }),
        headers: {
            'Content-Type': 'application/json',
        }
    })


        .then((response) => {
            console.log(response);
            return response.json();
        })
        .then((data) => {
            console.log('Success:', data);
            for (user of data) {
                // console.log(user);
                val.innerHTML +=
                    ' <option>' + user.speciality + '</option>';

            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });


}




// userdata.reset();


window.addEventListener('load', selt);
