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

// $("#eduTitle").bind('click', function () {
    //     $(this).html($(this).html() == '<h3>Education &#9650;</h3>' ? '<h3>Education &#9660;</h3>' : '<h3>Education &#9650;</h3>');
    // });
    // $("#proSkillsTitle").on('click', function () {
    //     $(this).html($(this).html() == '<h3>Professional Skills &#9650;</h3>' ? '<h3>Professional Skills &#9660;</h3>' : '<h3>Professional Skills &#9650;</h3>');
    // });
    // $("#empTitle").on('click', function () {
    //     $(this).html($(this).html() == '<h3>Employment History &#9650;</h3>' ? '<h3>Employment History &#9660;</h3>' : '<h3>Employment History &#9650;</h3>');
    // });

    // function educationTitle() {
//   var x = document.getElementById("eduTitle");
//   if (x.innerHTML === 'Education &#9660;') {
//     x.innerHTML = 'Education &#9650;';
//   } else if (x.innerHTML === 'Education &#9650;') {
//     x.innerHTML = 'Education &#9660;';
//   }
// }

// let refs = [
//   [ 
//     "Darin Ramos",
//     "801.652.xxxx",
//     "darinramos@test.com",
//     "Client"
//   ],

//   [
//     "Zuzana Stehlikova",
//     "801.205.xxxx",
//     "zuzana@gmail.com",
//     "Employer"
//   ],

//   [
//     "Kyle Challis",
//     "801.839.xxxx",
//     "kyle@gmail.com",
//     "Personal"
//   ]
// ]

// var referenceText = "<ol>";

// for (i = 0; i < refs.length; i++) {
//   referenceText += "<li>" + refs[i] + "</li>";
// }

// referenceText += "</ol>";

// document.getElementById("references").innerHTML = referenceText;





