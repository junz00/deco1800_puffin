function prevPage(){
    location.href="article2_p2.php";
}

function submit(){
    win.style.display = "block";
}
/* $(function() {
    var update = function() {
        $('#serialize').text(        
            JSON.stringify($('form').serialize())
        );
    };
    $(result).innerHTML = check(update());
    update();
    $('form').change(update);
})

function check (update) {
    var q1, q2, q3;
    var total = 0;
    const answers = update.split("&");
    while(answers.localeCompare(update) != 0) {
        console.log("hi");
   while(answers.length > 0) {
       var element = answers.pop();
       var point = element.indexOf("=");
       var question = element.substring(0, point);
       var answer = element.substring(point, element.length - 1)
       if(question.localeCompare("q1")) {
           if(answer.localeCompare("a")){
               total +=1;
            }
        }
        else if(question.localeCompare("q2")) {
            if(answer.localeCompare("b")){
                total +=1;
            }
        }
        else if(question.localeCompare("q3")) {
                 if(answer.localeCompare("c")){
                    total +=1;
                }
        }

    }
    answers = update.split("&");
}
    var send = total;
    total=0;
    return send;
} */

window.onload = function(){
    ch1 = sessionStorage.getItem("ch1Complete")
    ch2 = sessionStorage.getItem("ch2Complete")

    if (ch1 == "true" && ch2 == "true"){
            var box = document.getElementById("scrapMessage");
            box.style.display = "none";
    }
}

