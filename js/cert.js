function printCert() {
    // TODO
}

$(document).ready(function() {
    /* Display recipient and date */
    $("#recipient").text(getUserName());
    today = new Date();
    $("#date").text(`${today.getDate()}/${today.getMonth() + 1}/${today.getFullYear()}`);
});
