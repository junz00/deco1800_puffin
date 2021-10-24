function prevPage(){
    location.href="article2_p2.php";
}

function submit(){
    win.style.display = "block";
}

$(document).ready(function() {
    if (allPapersFound()) {
        $("#papers-not-found").addClass("papersFound");
        $("#quiz-form").addClass("papersFound");
    } else {
        /* Display icons representing how many scraps were found and remain */
        for (let i = 0; i < getNumPapersFound()[0]; i++) {
            $("#papers-not-found").append(
                $("<img>").attr("src", "images/certificate_scrap.png")
            );
        }
        for (let i = 0; i < getNumPapersFound()[2]; i++) {
            $("#papers-not-found").append(
                $("<img>").attr("src", "images/help_symbol.png")
            );
        }
    }
});

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

