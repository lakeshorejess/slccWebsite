window.onload = function() {
  setTimeout(function() {
    let person = prompt("Please enter your name:");
    if (person == null || person == "") {
      alert("Thank you for visiting my resume site!");
    } else {
      alert("Hello, " + person + "! Thank you for visiting my resume site.");
    }
  }, 2000);
}


