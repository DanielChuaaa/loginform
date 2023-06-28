function validateForm() {
  let x = document.forms["myForm"]["fname"]["lname"]["password"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
