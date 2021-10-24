function prevPage(){
    location.href="map.php";
}

function nextPage(){
    location.href="article1_p2.php";
}

function displayName() {
    var value = getUserName();
    var element = document.getElementById("enterName");
    element.innerHTML = ", " + value;
}
