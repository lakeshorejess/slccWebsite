// $(document).ready(function () {
//     $("ul").find("span").css({ color: "red", border: "2px solid red" });
//     //Toggles the selected element's visibility on button click
//     $("button#btnToggle").click(function () {
//         $("ul").find("span").toggle();
//     });

//     //Removed the click listener from the toggle button
//     $("button#btnRemoveLstnr").click(function () {
//         $("button#btnToggle").off("click");
//     });

//     //Adds the click listener and its function to the toggle button
//     $("button#btnAddLstnr").click(function () {
//         $("button#btnToggle").on("click", function () {
//             $("ul").find("span").toggle();
//         });
//     });
//     //Try adding an click event listener using the on() method for the span element to hide the element when it is clicked. Click on the toggle button to show the element again.
// });

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


    // $("#eduTitle").bind('click', function () {
    //     $(this).html($(this).html() == '<h3>Education &#9650;</h3>' ? '<h3>Education &#9660;</h3>' : '<h3>Education &#9650;</h3>');
    // });
    // $("#proSkillsTitle").on('click', function () {
    //     $(this).html($(this).html() == '<h3>Professional Skills &#9650;</h3>' ? '<h3>Professional Skills &#9660;</h3>' : '<h3>Professional Skills &#9650;</h3>');
    // });
    // $("#empTitle").on('click', function () {
    //     $(this).html($(this).html() == '<h3>Employment History &#9650;</h3>' ? '<h3>Employment History &#9660;</h3>' : '<h3>Employment History &#9650;</h3>');
    // });

    $("#eduTitle").on('click', function () {
        /*
        // THIS WORKS
        let arrowUp = '<h3>Education &#9650;</h3>';
        let arrowDown = '<h3>Education &#9660;</h3>';
        console.log($(this).html());
        let newHtml = $(this).html() == arrowUp ? arrowDown : arrowUp;
        $(this).html(newHtml);
        */
        $(this).find('.arrow-up').toggle();
        $(this).find('.arrow-down').toggle();
    });

});