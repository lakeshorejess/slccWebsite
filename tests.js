function runTests() {
    console.log("Starting runTests()...");
    testGreeting();
    // other tests should be called here as well...
}

function testGreeting() {
    console.log("Starting testGreeting()...");

    try {
        greetingAlert("Jess");
        greetingAlert("");
        greetingAlert("1");
        greetingAlert(null);
        greetingAlert("paosiudfpoasui dopfaiusd pofiaus dopfiuas opdifu asopdifu asopidfuaopsiduf poasidufopasuiepoiquweporuiqwpoeiufopasiud fopuiqwopeiuropasuidfop iuqopiwueropiu ");
        greetingAlert("&#9660;");
        greetingAlert("<script>alert('hello, world');</script>");
    } catch (error) {
        console.log("testGreeting() failed");
        console.error(error);
    }
}