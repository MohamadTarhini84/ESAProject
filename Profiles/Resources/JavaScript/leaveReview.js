let reviewForm=document.getElementById('review-popup');
let starRating=document.querySelectorAll('input[name="rating"]');
    
reviewForm.addEventListener('submit',function (e){
    e.preventDefault();

    let selected;
    for (const radioButton of starRating) {
        if (radioButton.checked) {
            selected = parseInt(radioButton.value);
            break;
        }
    }
    let reviewDesc=document.getElementById('dr-rev-desc').value;


        $.ajax({
            type: "POST",
            url: "./Resources/php/review.php",
            dataType: "json",
            data: {rating:selected,desc:reviewDesc}
        }).then(
            function(data){
                // let data =JSON.parse(result);
                if (data.code == "200"){
                    coolPopup();
                    toggle('review-popup');
                    console.log(data.msg);
                } else if(data.code=='201'){
                    alert("You already posted a review!");
                    toggle('review-popup');
                } else {
                    console.log(data.msg);
                }
            }
        );
});