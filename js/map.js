function openBox() {
    $("#scrapMessage").removeClass("hidden");
}

//hides the box when the close button is pressed
function closeBox() {
    $("#scrapMessage").addClass("hidden");
}

//hides the box if the user presses outside of it        
window.onclick = function(event) {
    var box = document.getElementById("scrapMessage");
    var scrap = document.getElementById("scrap");
    if (event.target == scrap) {
        box.style.display = "none";}
}

window.onload = function() {
    
    activeBookmark('map');
    
    if (isPaperFound("ch1Complete")) {
        var ch1Point = document.getElementById("ch1")
        var ch1Message = document.getElementById("ch1Message")

        var complete = document.createTextNode(":Complete");
        ch1Point.style.background="lightgreen";
        ch1Message.appendChild(complete);

    }
    if (isPaperFound("ch2Complete")) {
        var ch2Point = document.getElementById("ch2")
        var ch2Message = document.getElementById("ch2Message")
        var complete = document.createTextNode(":Complete");

        ch2Message.appendChild(complete);
        ch2Point.style.background="lightgreen";
    }

    $("#help").click(openBox);

    if(allPapersFound()) {
        $("#helpText").addClass("hidden");
        $("#chapterCompleteText").removeClass("hidden");
        openBox();
    } else {
        $("#helpText").removeClass("hidden");
        $("#chapterCompleteText").addClass("hidden");
        if (!thisPageBeenVisited()) {
            openBox();
            recordThisPageVisited();
        }
    }
};
