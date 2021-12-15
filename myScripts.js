window.onload = function () {
  setTimeout(function () {
    let person = prompt("Please enter your name:");
    greetingAlert(person);
  }, 2000);
}

function greetingAlert(person) {
  const date = new Date();
  const dayOfMonth = `${date.getMonth() + 1}/${date.getDate()}/${date.getFullYear()}`;
  const hour = date.getHours();
  let greeting;

  if (hour >= 5 && hour < 12) {
    greeting = 'Good morning'
  } else if (hour >= 12 && hour < 18) {
    greeting = 'Good afternoon'
  } else {
    greeting = 'Good evening'
  }

  if (person == null || person == "") {
    alert(`${greeting}! Thank you for visiting my resume site on ${dayOfMonth}.`);
  } else {
    alert(`${greeting}, ${person}! Thank you for visiting my resume site on ${dayOfMonth}.`);
  }
}

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





