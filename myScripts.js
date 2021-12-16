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

