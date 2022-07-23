function validateForm() {
var name = document.forms["form"]["name"].value;
var email = document.forms["form"]["email"].value;
var checkbox = document.querySelector('input[name="productcheck[]"]:checked');
var radio = document.querySelector('input[name="approval"]:checked');
var dob =new Date(birthday.value);


if (name == "") {
alert("Name must be filled out");
return false;
}
if (email == "") {
alert("Email must be filled out");
return false;
}

if(!checkbox) {
   alert('Please select one product');
return false;
}
 

if(!radio) {
   alert('Please select one option');
return false;
}

}