var nameError = document.getElementById('name-eror');
var emailError = document.getElementById('email-eror');
var phoneError = document.getElementById('phone-error');
var dobError = document.getElementById('dob-error');
var usernameError = document.getElementById('username-error');
var passError = document.getElementById('pass-error');
var conpwdError = document.getElementById('conpwd-error');
var genderError = document.getElementById('gender-error');
var checkError = document.getElementById('check-error');

function validateName(){
    var name = document.getElementById('name').value;
    
    if(name.length == 0){
        nameError.innerHTML = 'Name is required!';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML = "Write full name!";
        return false;
    }
    nameError.innerHTML = '<i class="fas fa-check-circle"></i>' ;
    return true; 
}