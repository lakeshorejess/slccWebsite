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
});