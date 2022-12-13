<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="app-popup">
        <div id="app-popup-upper">
            <h3>Appointment Information</h3>
            <i onclick="toggleApp()" class="fa-solid fa-xmark"></i>
        </div>
        <div id="app-popup-lower">
            <div id="app-popup-left">
                <div class="left-input">
                    <p>Choose day:</p>
                    <input type="date">
                </div>
                <div class=left-input>
                    <p>Choose Time:</p>
                    <input type="time">
                </div>
                <p>Appointment Description:</p>
                <textarea placeholder="Description"></textarea>
                <div id="left-buttons">
                    <button class="app-desc" onclick="toggleApp()">Cancel</button>
                    <button class="app-desc" onclick="toggleApp()" style="margin-right:0">Make Appointment</button>
                </div>
            </div>
            <div id="app-popup-right">
                <div class="right-image">
                    <img src="./Resources/Images/doctor.jpg">
                </div>
                <div>
                    <div class="app-name">
                        Dr. Batata ma2loube
                    </div>
                    <div class="app-info">
                        archeologist
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
/* INCLUDE THIS !!!!!!
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
*/

:root {
    --green: #16a085;
    --white: #f7f7f7;
}

#page.active {
    filter: blur(20px);
    pointer-events: none;
    user-select: none;
    transition: 0.1s;
    height: auto;
}

.app-popup {
    width: 700px;
    height: 400px;
    display: flex;
    flex-direction: column;
    border-radius: 5px;
    border: 1px solid silver;
    position: fixed;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 5px 30px rgba(0 0 0 0.3);
    background: var(--white);
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
}

.app-popup.active {
    top: 50%;
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
}

#app-popup-upper {
    height: 50px;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid silver;
    padding: 0 20px;
    background-color: #16a085;
    color: #f7f7f7;
    align-items: center;
}

.fa-xmark:hover {
    scale: 1.5;
    color: red;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}

#app-popup-lower {
    height: 100%;
    display: flex;
}

#app-popup-left {
    height: 310px;
    border-right: 1px solid silver;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#app-popup-left textarea {
    width: 450px;
    height: 80px;
    resize: none;
    border-radius: 5px;
    border: 1px solid silver;
    padding: 10px;
}

textarea:focus {
    outline: none !important;
}

input:focus {
    outline: none !important;
}

#app-popup-right {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-bottom: 50px;
}

.left-input {
    width: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left-input>input {
    width: 200px;
    height: 20px;
    border-radius: 5px;
    border: 1px solid silver;
}

#left-buttons {
    display: flex;
    justify-content: right;
    margin: 10px 0;
    font-size: 10px;
}

.right-image img {
    aspect-ratio: 1/1;
    width: 100px;
    border-radius: 500px;
    border: 1px solid var(--green);
}

.app-desc {
    height: 30px;
    width: 120px;
    margin: 10px;
    background-color: var(--green);
    color: var(--white);
    padding: 5px;
    border: none;
    border-radius: 5px;
    font-size: 12px;
}

.app-desc:hover {
    cursor: pointer;
    background-color: rgba(22, 160, 133, 0.4);
    transition: 0.2s;
}

.app-name {
    font-size: 15px;
    text-transform: capitalize;
    font-weight: 500;
}

.app-info {
    color: var(--green);
    text-transform: capitalize;
    margin-bottom: 12px;
}

.name-desc {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
</style>
<script>
let blur = document.getElementById('page');

function toggleApp() {
    blur.classList.toggle('active');
    let appPopup = document.getElementsByClassName("app-popup");
    appPopup[0].classList.toggle('active');
}
</script>

</html>