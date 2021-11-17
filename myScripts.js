function thanks() {

    let person = prompt("Please enter your name:");
    if (person == null || person == "") {
      alert("Thank you for visiting my resume site!");
    } else {
      alert("Hello " + person + "! Thank you for visiting my resume site.");
    }
    setTimeout(thanks, 2000);
  }


