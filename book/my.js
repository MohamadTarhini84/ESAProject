let users = document.getElementById('users');
let timefrom = document.getElementById('timefrom');
let findtime = document.getElementById('findtime');
let datenow = document.getElementById('datenow');
let userdata = document.getElementById('userdata');

const th1 = document.getElementById('tarhini-head-1');
const th2 = document.getElementById('tarhini-head-2');

th1.addEventListener('click', function () {
    als.innerHTML = "";
});
th2.addEventListener('click', function () {
    als.innerHTML = "";
});

const search = () => {
    als.innerHTML = "";
    const data = {
        users: users.value,
        datenow: datenow.value,
        timefrom: timefrom.value,
        findtime: findtime.value,

    };

    fetch('./search.php', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())

        .then((data) => {
            console.log('Success:', data);
            for (users of data) {
                als.innerHTML +=
                    ` <div class="info-doc"> <div class="info-img">
                    <img src="./images/img1.jpg" class="images" />
                    </div> 
                    <div class="info-del"><div class="first-info"><span class="span-doc">` + users.name + `</span> <br> EMAIL:`
                    + users.email + `<div> AGE:` + users.age + `</div> </div>
                <hr>  <div class="secon-book">
                <div class="second-info">NABATIEH CITY<br>
        
                    Medical Center</div>
                    <div class="book-butt" onclick="todoctor()"> <a href="../Profiles/doctorProfile.html?id=users.id"><button>Book Online</button></a></div>
        
            </div>
            </div>
            </div>` ;

            }

        })
        .catch((error) => {
            console.error('Error:', error);
        });


    userdata.reset();

}


document.getElementById('btn').addEventListener('click', search);












