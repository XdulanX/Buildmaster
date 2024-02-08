
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Check if the name is empty
  if (name == "") {
    alert("Please enter your name.");
    return false;
  }

  // Check if the email is valid
  if (!/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Check if the message is empty
  if (message == "") {
    alert("Please enter your message.");
    return false;
  }

  // Everything is valid, submit the form
  return true;
}

 function validateForm() {
 var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var budget = document.getElementById("budget").value;
  var goals = document.getElementById("goals").value;
  var construction_type = document.getElementById("construction_type").value;

  // Check if the name is empty
  if (name == "") {
    alert("Please enter your name.");
    return false;
  }

  // Check if the email is valid
  if (!/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Check if the phone number is valid
  if (!/^\d{10}$/.test(phone)) {
    alert("Please enter a valid phone number.");
    return false;
  }

  // Check if the budget is a number
  if (!isNaN(budget)) {
    alert("Please enter a valid budget.");
    return false;
  }

  // Check if the goals are empty
  if (goals == "") {
    alert("Please enter your goals.");
    return false;
  }

  // Check if the construction type is selected
  if (construction_type == "") {
    alert("Please select a construction type.");
    return false;
  }

  // Everything is valid, submit the form
  return true;
}
