let fetchval = document.getElementById('fetchval');
let starttime = document.getElementById('starttime');
let closetime = document.getElementById('closetime');
let donedate = document.getElementById('donedate');
let datausers = document.getElementById('datausers');
// var temp = document.getElementById('als');
let als = document.getElementById('als');
// als.remove();
// setTimeout(() => {
//     document.body.append(temp);
// }, 5000)

const searchs = () => {
    const data = {
        fetchval: fetchval.value,
        donedate: donedate.value,
        starttime: starttime.value,
        closetime: closetime.value,
    };
    // console.log(data);

    fetch('./new.php', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success:', data);
            // als.remove();
            for (user of data) {
                als.innerHTML +=
                    ` <div class="info-doc"> 
                    <div class="info-img">
                    <img src="../images/img1.jpg" class="images" />
                    </div> 
                    <div class="info-del"><div class="first-info"><span class="span-doc">` + user.name + `</span> <br> EMAIL:`
                    + user.email + `<div> AGE:` + user.birthday + `</div> </div>
                <hr>  <div class="secon-book">
                <div class="second-info">NABATIEH CITY<br>
        
                    Medical Center</div>
                    <div class="book-butt"><button>Book Online</button></div>
            </div>
            </div>
            </div>` ;

            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    datausers.reset();

}




// userdata.reset();


document.getElementById('btnselect').addEventListener('click', searchs);










