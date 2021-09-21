function exitGame() {
    location.href="article.html";
}

function dragStart(event) {
    event.dataTransfer.setData("text", event.target.id);
}

function showDrop(event) {
    event.preventDefault();
}

function drop(event) {
    event.preventDefault();
    var id = event.dataTransfer.getData("text");
    var item = document.getElementById(id);
    event.target.appendChild(item);
}