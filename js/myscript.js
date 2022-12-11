

/*function validateEmail(id) {
    let email = document.getElementById(id)
    var mail = email.value
    const emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emaiPattern)) {
    return emailField.classList.add("invalid"); 
    }
    id.innerHTML = "Ooops!";
  }*/

  function validateForm() {
    let uname = document.getElementById("username").value
    let unameError = document.getElementById("uidError")
    if (uname == "dd") {
      unameError.textContent = "Please Enter Username"
      return false;
    }
  }