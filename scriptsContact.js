let refs = [
    {
        name: "Darin Ramos",
        phone: "801.652.xxxx",
        email: "darinramos@test.com",
        relationship: "Client"
    },

    {
        name: "Zuzana Stehlikova",
        phone: "801.205.xxxx",
        email: "zuzana@gmail.com",
        relationship: "Employer"
    },

    {
        name: "Kyle Challis",
        phone: "801.839.xxxx",
        email: "kyle@gmail.com",
        relationship: "Personal"
    }
];

var referenceList = "<ul>";

for (i = 0; i < refs.length; i++) {
    let contact = refs[i];
    referenceList += "<li>" + contact.name + " | " + contact.phone + " | " + contact.email + " | " + contact.relationship + "</li>";
}

referenceList += "</ul>";

document.getElementById("references").innerHTML = referenceList;
