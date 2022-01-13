var sidebarColor;

function collapseFunc() {

    if ($('#sidebar').is(":visible")) {
        $("#main").css('grid-template-columns', '"none"');
        $(".contentContainer").css('width', "100vw");
        $("#sidebar").hide();
        $("#collapser").removeClass("far fa-caret-square-left unselectable");
        $("#collapser").addClass("far fa-caret-square-right unselectable");
    } else {
        $("#main").css('grid-template-columns', '"1fr 6fr"');
        $(".contentContainer").css('width', '');
        $("#sidebar").show();
        $("#collapser").removeClass("far fa-caret-square-right unselectable");
        $("#collapser").addClass("far fa-caret-square-left unselectable");
    }


}