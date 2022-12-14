let revs = document.getElementById('review-field');

window.addEventListener("load", async function () {
    let a = await fetch("./Resources/php/fetchReview.php?type=doc");
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
    let conf, confButton;

    c.forEach(function (element) {

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
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
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