$(document).ready(function() {
    /* Event handler when changing galleries. */
    $(".db-queries li").click(function() {
        $(".db-queries li").removeClass("selected");
        $(this).addClass("selected");
        $(".gallery-images")
                .attr("query", $(this).attr("query"))
                .attr("limit", $(this).attr("limit"));
        updateGalleries();
    });
});


window.onload = function() {
    activeBookmark('gallery')
}
 