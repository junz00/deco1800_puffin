function prevPage(){
    location.href="index.php";
}

function nextPage(){
    location.href="map.php";
}

//var today = new Date();
//var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 1 day??

function setName(name, id) {
    var element = document.getElementById(id);
    var elementValue = escape(element.value);

    setUserName(elementValue);
    displayName()
}

function displayName() {
    var value = getUserName();
    var element = document.getElementById("enterName");
    element.innerHTML = value;

    /**const namePara = document.createElement("p");
    namePara.className = "p1";
    const nameValue = document.createTextNode(value);
    namePara.appendChild(nameValue);
    const nameForm = document.getElementById("enterName");
    nameForm.parentNode.replaceChild(namePara, nameForm); */
}

function redisplayName() {

}
