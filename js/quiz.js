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

    activeBookmark('quiz')
window.onload = function(){
     }