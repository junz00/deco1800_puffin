function openBox() {
    var box = document.getElementById("scrapMessage");
    box.style.display = "block";
}

//hides the box when the close button is pressed
function closeBox() {
    var box = document.getElementById("scrapMessage");
    box.style.display = "none";
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

    if (!thisPageBeenVisited()) {
        openBox()
        recordThisPageVisited();
    }

    $("#help").click(openBox);

    if(allPapersFound()) {
        var oldMessage = document.getElementById("helpText");
        
        var congrats = document.createElement("h3"); 
        var congratsTxt = document.createTextNode("Congratulations, you completed all the chapters!")

        congrats.appendChild(congratsTxt);
        oldMessage.replaceWith(congrats)
        
        var message = document.createElement("p"); 
        var txt = document.createTextNode("To finish the Brisbane Flood Journal, put your knowledge\
                                            to the test in the quiz, or if you would like to let the\
                                            knowledge sink in for a bit longer, why not visit the Gallery\
                                            to view further experiences of flooding from around Australia.");
        message.appendChild(txt);
        congrats.append(message);

        var quizBtn = document.createElement("a");
        var qbTxt = document.createTextNode("Quiz");
        quizBtn.appendChild(qbTxt);
        quizBtn.href = "quiz.php";
        quizBtn.className = "mapButton"

        var galleryBtn = document.createElement("a");
        var gTxt = document.createTextNode("Gallery");
        galleryBtn.appendChild(gTxt);
        galleryBtn.href = "gallery.php";
        galleryBtn.className = "mapButton"

        var buttons = document.createElement("p");
        buttons.appendChild(quizBtn);
        buttons.appendChild(galleryBtn);

        congrats.append(buttons);

        openBox()
    }
};
