
//hide and show sections on Index
$(document).ready(function () {
    $("#eduTitle").click(function () {
        $("#eduBody").toggle();
    });
    $("#proSkillsTitle").click(function () {
        $("#proSkillsBody").toggle();
    });
    $("#empTitle").click(function () {
        $("#empBody").toggle();
    });
    
//change arrow up or down on div click
    $("#eduTitle").on('click', function () {
        $(this).find('.arrow-up').toggle();
        $(this).find('.arrow-down').toggle();
        /*
        // THIS WORKS
        let arrowUp = '<h3>Education &#9650;</h3>';
        let arrowDown = '<h3>Education &#9660;</h3>';
        console.log($(this).html());
        let newHtml = $(this).html() == arrowUp ? arrowDown : arrowUp;
        $(this).html(newHtml);
        */
    });
    $("#proSkillsTitle").on('click', function () {
        $(this).find('.arrow-up').toggle();
        $(this).find('.arrow-down').toggle();

    });
    $("#empTitle").on('click', function () {
        $(this).find('.arrow-up').toggle();
        $(this).find('.arrow-down').toggle();

    });

});