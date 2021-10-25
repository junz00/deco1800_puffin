function displayName() {
    var value = getUserName();
    var element = document.getElementById("enterName");
    element.innerHTML = ", " + value;
}

window.onload = function() {
    activeBookmark('ch1');
    displayName()
}