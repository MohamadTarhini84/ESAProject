let revs = document.getElementById('review-field');

window.addEventListener("load", async function () {

    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let a = await fetch("./Resources/php/fetchReview.php?type=doc&id="+patientProfileId);
    let b = await a.text();
    let c = JSON.parse(b);
    // console.log(b);
    if (c.bob == -1) {
        revs.innerHTML = `
            <div id="no-apps-question-mark">
                You don't have any posted reviews!
            </div>
        `;
        return;
    }
    let stars="";

    c.forEach(function (element) {
        if(element.rating>=5){
            stars=`   
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            `;
        } else if(element.rating>=4){
            stars=`
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            `;
        } else if(element.rating>=3){
            stars=`
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            `;
        } else if(element.rating>=2){
            stars=`
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            `;
        } else if(element.rating>=1){
            stars=`
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            `;
        } else {
            stars=`
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            `;
        }

        revs.innerHTML += `
        <div class="review">
        <div class="review-container">
            <div class="quotes">
                <img src="./Resources/Images/quotes.png">
            </div>
            <div class="review-bg">
                <div class="review-pic">
                    <img src="./Resources/Images/doctor.jpg">
                </div>
                <div class="review-element review-1st">
                    Review by: ${element['patName']}
                </div>
                <div class="review-element">
                    ${stars}
                </div>
                <div class="review-element" style="max-height:200px;overflow-y:auto;">
                    ${element['desc']}
                </div>
                <div class="review-likes">
                    <i class="fa-regular fa-heart"></i> ${element['likes']}
                </div>
            </div>
            <div class="quotes">
                <img src="./Resources/Images/quotes.png">
            </div>
        </div>
    </div>
        `;
    });
});