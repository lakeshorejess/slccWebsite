const refs = [
    {
        name: "Darin Robin",
        phone: "801.652.0000",
        email: "darinramos@test.com",
        relationship: "Client"
    },

    {
        name: "Zuzana Stella",
        phone: "801.205.0000",
        email: "zuzana@gmail.com",
        relationship: "Employer"
    },

    {
        name: "Kyle Lindsey",
        phone: "801.831.0000",
        email: "kyle@gmail.com",
        relationship: "Personal"
    }
];


//references in an UL form
let referenceList = "<ul>";

for (i = 0; i < refs.length; i++) {
    let contact = refs[i];
    referenceList += "<li>" + contact.name + " | " + contact.phone + " | " + contact.email + " | " + contact.relationship + "</li>";
}
referenceList += "</ul>";

// document.getElementById("references").innerHTML = referenceList;

const references = [
    {
        first: "Darin",
        last: "Robin",
        relation: "Client"
    },

    {
        first: "Zuzana",
        last: "Stella",
        relation: "Employer"
    },

    {
        first: "Kyle",
        last: "Lindsey",
        relation: "Brother"
    }
]

function buildTable() {
//references in a table form
    let tbReferences = document.getElementById('tbReferences')
    let rowsToClear = tbReferences.getElementsByTagName('tr');
    console.log(rowsToClear)
    
    for (let i = rowsToClear.length - 1; i >= 0; i--) {
        tbReferences.removeChild(rowsToClear[i])
    }

    references.forEach((reference, index) => {
        let referenceTr = document.createElement('tr');
        let number = document.createElement('td');
        let first = document.createElement('td');
        let last = document.createElement('td');
        let relation = document.createElement('td');
        number.innerHTML = index + 1;
        first.innerHTML = reference.first;
        last.innerHTML = reference.last;
        relation.innerHTML = reference.relation;
        referenceTr.append(number);
        referenceTr.append(first);
        referenceTr.append(last);
        referenceTr.append(relation);
        tbReferences.append(referenceTr);
    })
}
//Form Validation
buildTable();

function addToRefs() {
    let refFirstName = document.getElementById("refFirstName").value;
    let refLastName = document.getElementById("refLastName").value;
    let refRelation = document.getElementById("refRelation").value;
    
    references.push(
        {
            first: refFirstName,
            last: refLastName,
            relation: refRelation
        }
    )

    buildTable();
}

function validate() {

    if (document.myForm.name.value == "") {
        alert("Please provide your name!");
        document.myForm.name.focus();
        return false;
    }
    if (document.myForm.email.value == "") {
        alert("Please provide your email!");
        document.myForm.email.focus();
        return false;
    }
    if (document.myForm.mobile.value == "" || isNaN(document.myForm.mobile.value) ||
        document.myForm.mobile.value.length != 10) {
        alert("Please provide a mobile phone number in the format ##########.");
        document.myForm.mobile.focus();
        return false;
    }
   
    return (true);
}

// $("form[name='myForm']").validate({
//     rules: {

//     firstname: "required"
//     lastname: "required"
//     email: {
//         required: true,
//         email: true
//     }
// }
// })

// $(document).ready(function() {
//     $('#submit').click(function(e) {
//     // Initializing Variables With Form Element Values
//     var firstname = $('#firstname').val();
//     var addr = $('#addr').val();
//     var zip = $('#zip').val();
//     var state = $('#state').val();
//     var username = $('#username').val();
//     var email = $('#email').val();
//     // Initializing Variables With Regular Expressions
//     var name_regex = /^[a-zA-Z]+$/;
//     var email_regex = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
//     var add_regex = /^[0-9a-zA-Z]+$/;
//     var zip_regex = /^[0-9]+$/;
//     // To Check Empty Form Fields.
//     if (firstname.length == 0) {
//     $('#head').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
//     $("#firstname").focus();
//     return false;
//     }
//     // Validating Name Field.
//     else if (!firstname.match(name_regex) || firstname.length == 0) {
//     $('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
//     $("#firstname").focus();
//     return false;
//     }
//     // Validating Username Field.
//     else if (!(username.length >= 6 && username.length <= 8) || username.length == 0) {
//     $('#p2').text("* Please enter between 6 and 8 characters *"); // This Segment Displays The Validation Rule For Username
//     $("#username").focus();
//     return false;
//     }
//     // Validating Email Field.
//     else if (!email.match(email_regex) || email.length == 0) {
//     $('#p3').text("* Please enter a valid email address *"); // This Segment Displays The Validation Rule For Email
//     $("#email").focus();
//     return false;
//     }
//     // Validating Select Field.
//     else if (state == "Please Choose") {
//     $('#p4').text("* Please Choose any one option"); // This Segment Displays The Validation Rule For Selection
//     $("#state").focus();
//     return false;
//     }
//     // Validating Address Field.
//     else if (!addr.match(add_regex) || addr.length == 0) {
//     $('#p5').text("* For Address please use numbers and letters *"); // This Segment Displays The Validation Rule For Address
//     $("#addr").focus();
//     return false;
//     }
//     // Validating Zip Field.
//     else if (!zip.match(zip_regex) || zip.length == 0) {
//     $('#p6').text("* Please enter a valid zip code *"); // This Segment Displays The Validation Rule For Zip
//     $("#zip").focus();
//     return false;
//     } else {
//     alert("Form Submitted Successfuly!");
//     return true;
//     }
//     });
//     });





