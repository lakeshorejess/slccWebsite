window.onload = function() {
  setTimeout(function() {
    let person = prompt("Please enter your name:");

    const date = new Date();
    const timeOfDay = `${date.getMonth()+1}/${date.getDate()}/${date.getFullYear()}`;
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
      alert(`${greeting}! Thank you for visiting my resume site on ${timeOfDay}.`);
    } else {
      alert(`${greeting}, ${person}! Thank you for visiting my resume site on ${timeOfDay}.`);
    }
  }, 2000);
}
//test



