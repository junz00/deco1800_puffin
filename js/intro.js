var invalidNameEntered = false;

function prevPage(){
    location.href="index.php";
}

function nextPage(){
    location.href="map.php";
}

function setName() {
    uname = $("#userName").val();
    console.log(uname);
    if (uname) {
        $("#button-next").removeClass("hidden");
        setUserName(uname);
        displayName();
    } else if (!invalidNameEntered) {
        $("#userName").after($("<p id=\"invalid-name\">Please enter your name</p>"));
        invalidNameEntered = true;
    }

}

function displayName() {
    var value = getUserName();
    var element = document.getElementById("enterName");
    element.innerHTML = value;

    const namePara = document.createElement("p");
    namePara.className = "p1";
    const nameValue = document.createTextNode(value);
    namePara.appendChild(nameValue);
    const nameForm = document.getElementById("enterName");
    nameForm.parentNode.replaceChild(namePara, nameForm);
}

function redisplayName() {

}
