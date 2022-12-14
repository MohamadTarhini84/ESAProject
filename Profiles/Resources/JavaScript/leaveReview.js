let reviewForm=document.getElementById('review-popup');
let starRating=document.querySelectorAll('input[name="rating"]');
    
reviewForm.addEventListener('submit',function (e){
    e.preventDefault();
    const urlParams = new URLSearchParams(window.location.search);
    let patientProfileId=urlParams.get('id');

    let selected;
    for (const radioButton of starRating) {
        if (radioButton.checked) {
            selected = parseInt(radioButton.value);
            break;
        }
    }
    let reviewDesc=document.getElementById('dr-rev-desc').value;
    if(reviewDesc==""){
        reviewDesc="No Description Provided.";
    }


        $.ajax({
            type: "POST",
            url: "./Resources/php/review.php",
            dataType: "json",
            data: {rating:selected,desc:reviewDesc, id:patientProfileId}
        }).then(
            function(data){
                // let data =JSON.parse(result);
                if (data.code == '200'){
                    // console.log(data.msg);
                    coolPopup();
                    toggle('review-popup');
                } else if(data.code=='201'){
                    alert("You already posted a review for this doctor!");
                    toggle('review-popup');
                } else {
                    console.log(data.msg);
                }
            }
        );
});