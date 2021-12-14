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

let referenceList = "<ul>";

for (i = 0; i < refs.length; i++) {
    let contact = refs[i];
    referenceList += "<li>" + contact.name + " | " + contact.phone + " | " + contact.email + " | " + contact.relationship + "</li>";
}
referenceList += "</ul>";

document.getElementById("references").innerHTML = referenceList;

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

let tbReferences = document.getElementById('tbReferences')

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







