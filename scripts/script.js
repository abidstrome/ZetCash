'use strict'


//*****************Name Validator*************************


function nameValidation(name) {

    var error;

    if (name === "") {

        error = "Enter Your Name";
        alert(error);
        return false;


    } else {

        let name_word = name.split(" ");

        if (name_word.length < 2) {

            error = "Enter Full Name!";
            alert(error);
            return false;

        } else {

            let pattern = ['<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3',
                '4', '5', '6', '7', '8', '9'
            ];


            for (var i = 0; i < pattern.length; i++) {

                if (name.includes(pattern[i])) {

                    error = "Name accepts only charecter";
                    alert(error);
                    return false;
                    break;


                }

            }



        }
        return true;

    }



}


//*****************Email Validator*************************



function emailValidation(email) {

    if (email.includes("@") && email.includes(".com")) {

        return true;

    } else {
        alert("Invalid Email");
        return false;
    }

}

//*****************UserName Validator*************************




function usernameValidation(username) {



    if (username.includes(" ")) {

        alert("invalid username");
        return false;

    } else {
        return true;
    }

}


//*****************Password Validator*************************
function passwordValidator(password, cpassword) {
    if (password != cpassword) {

        alert("password and confirm password does not match");
        return false;

    }
    if (!checkUpperCase(password)) {

        alert('The password requires a capital letter.');
        return false;
    }
    if (!checkLowerCase(password)) {

        alert('The password requires a lower case letter.');
        return false;

    }
    if (!checkLength(password)) {
        alert('Password must contain at least 8 charecter and less than 20.');
        return false;
    }

    if (!checkSpecialCharacter(password)) {
        alert('The password requires a special character.');
        return false;
    }
    if (!checkNumber(password)) {
        alert('The password requires a Number.');
        return false;
    }

    if (checkUpperCase(password) && checkLowerCase(password) && checkLength(password) && checkSpecialCharacter(password) && checkNumber(password)) {
        return true;
    }

}

function checkUpperCase(password) {
    var upper = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < upper.length; j++) {
            if (password[i] === upper[j]) {
                return true;
            }
        }
    }
}

function checkLowerCase(password) {
    var lower = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < lower.length; j++) {
            if (password[i] === lower[j]) {
                return true;
            }
        }
    }
}

function checkLength(password) {
    for (var i = 0; i < password.length; i++) {
        if (password.length >= 8 && password.length <= 20) {
            return true;
        }
    }
}

function checkSpecialCharacter(password) {
    var specialCharacters = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "+"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < specialCharacters.length; j++) {
            if (password[i] === specialCharacters[j]) {
                return true;
            }
        }
    }
}

function checkNumber(password) {
    var number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < number.length; j++) {
            if (password[i] === number[j]) {
                return true;
            }
        }
    }
}

//*****************Mobile Number Validator*************************


function checkMobileNumber(mobileNumber) {


    if (toString(parseInt(mobileNumber)) == mobileNumber) {
        //alert('Mobile number should contain only digit');
        console.log(parseInt(mobileNumber));
        return true;
    } else {

        alert('Mobile number should contain only digit');
        return false;

    }
}


//*****************Log IN *************************
function userValidate() {

    var submit = document.getElementById("Submit").value;

    var username = document.getElementById("userName").value;

    var password = document.getElementById("Password").value;

    if (username == "" || password == "") {

        document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {

        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../controller/user/loginCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText != true) {
                    //document.getElementById('response').innerHTML =this.responseText;
                    window.location = "dashboard.php";
                    exit();

                } else {

                    document.querySelector("#response").innerHTML += this.responseText;


                }


            }
        }

        xhttp.send('submit=' + submit + '&username=' + username + '&password=' + password);

    }

}


//*****************PASSWORD CHANGE *************************
function changePassword() {

    var change = document.getElementById("change").value;

    var rnpassword = document.getElementById("rnpassword").value;

    var npassword = document.getElementById("npassword").value;

    var cpassword = document.getElementById("cpassword").value;

    if (rnpassword == "" || cpassword == "" || npassword == "") {

        document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {
        //document.getElementById('response').innerHTML = "Missing ";
        if (passwordValidator(npassword, rnpassword)) {

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/forgotPassword.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    if (this.responseText == "Password Changed") {

                        var result = this.responseText;
                        var response = result.fontcolor("green");
                        document.getElementById('response').innerHTML = response;
                        //window.location= "../view/dashboard.php";
                        window.stop();
                    } else {
                        //dv.style.color = "red";
                        var result = this.responseText;
                        var response = result.fontcolor("red");
                        document.getElementById('response').innerHTML = response;
                        exit();


                    }


                }
            }

            xhttp.send('change=' + change + '&npassword=' + npassword + '&cpassword=' + cpassword);

        } else {
            document.getElementById('response').innerHTML = "password error";
        }



    }

}

//*****************REGISTRATION *************************

function registration() {

    var name = document.getElementById("Name").value;
    var username = document.getElementById("userName").value;
    var email = document.getElementById("Email").value;
    var mobileNumber = document.getElementById("mobileNumber").value;
    var password = document.getElementById("Password").value;
    var cpassword = document.getElementById("Cpassword").value;
    var dob = document.getElementById("Dob").value;
    var gender = document.getElementById("Gender").value;
    var submit = document.getElementById("Submit").value;



    if (name == "" || username == "" || email == "" || password == "" || cpassword == "" || dob == "" || gender == "" || mobileNumber == "") {

        document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {

        if (nameValidation(name)) {

            if (emailValidation(email)) {

                if (isNaN(mobileNumber) == false) {

                    if (passwordValidator(password, cpassword)) {

                        if (usernameValidation(username)) {

                            var xhttp = new XMLHttpRequest();
                            xhttp.open('POST','../../controller/user/regCheck.php' , true);
                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                            xhttp.onreadystatechange = function () {

                                if (this.readyState == 4 && this.status == 200) {

                                    if (this.responseText == "Registration Succesfull") {

                                        var result = this.responseText;
                                        var response = result.fontcolor("green");
                                        document.getElementById('response').innerHTML = response;
                                        exit();
                                    } else {
                                        var result = this.responseText;
                                        var response = result.fontcolor("red");
                                        document.getElementById('response').innerHTML = response;
                                    }
                                }
                            }

                            xhttp.send('submit=' + submit + '&username=' + username + '&password=' + password + '&name=' + name + '&email=' + email + '&dob=' + dob + '&gender=' + gender + '&mobileNumber=' + mobileNumber);

                        } else {
                            document.getElementById('response').innerHTML = "Enter Username Again";
                        }

                    } else {
                        document.getElementById('response').innerHTML = "Enter Password Again";
                    }

                } else {
                    document.getElementById('response').innerHTML = "Mobile Number accepts only Numbers";
                }

            } else {
                document.getElementById('response').innerHTML = "Invalid Email \n Enter Email Again";
            }

        } else {
            document.getElementById('response').innerHTML = "Invalid Name \n Enter Name Again";
        }



    }




}

//*****************Search Transaction*************************
function searchTransaction() {
    const transid = document.getElementById('transid').value;
    //document.getElementById('result')='';
    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../../controller/user/searchTransaction.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').style.border = "2px solid #000000";
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
    xhttp.send('transid=' + transid);
}

//*****************EDIT PROFILE*************************

function editProfile() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var submit = document.getElementById("submit").value;

    if (name == "" || email == "" || dob == "" || gender == "") {

        document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {
        if (nameValidation(name)) {

            if (emailValidation(email)) {

                var xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/edit.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "Profile Updated") {

                            var result = this.responseText;
                            var response = result.fontcolor("red");
                            document.getElementById('response').innerHTML = this.responseText;
                            //window.location= "../view/dashboard.php";
                            window.stop();
                        } else {
                            //dv.style.color = "red";
                            var result = this.responseText;
                            var response = result.fontcolor("green");
                            document.getElementById('response').innerHTML = response;
                            window.stop();


                        }


                    }
                }

                xhttp.send('submit=' + submit + '&name=' + name + '&email=' + email + '&dob=' + dob + '&gender=' + gender);

            } else {
                document.getElementById('response').innerHTML = "email error";
            }

        } else {
            document.getElementById('response').innerHTML = "name error";
        }
    }

}


//*****************  IMAGE UPLOAD*************************
function imageUpload() {
    var upload = document.getElementById('upload').value;
    var image = document.getElementById('image').value;
    var ext = image.substring(image.lastIndexOf('.') + 1);

    if (image == "") {

        document.getElementById('response').innerHTML = "Please Select A photo";

    } else {
        if (ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG") {
            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/uploadImage.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    if (this.responseText == "Picture Uploaded") {

                        var result = this.responseText;
                        var response = result.fontcolor("red");
                        document.getElementById('response').innerHTML = this.responseText;
                        //window.location= "../view/dashboard.php";
                        window.stop();
                    } else {
                        //dv.style.color = "red";
                        var result = this.responseText;
                        var response = result.fontcolor("green");
                        document.getElementById('response').innerHTML = response;
                        window.stop();


                    }


                }
            }

            xhttp.send('upload=' + upload + '&image=' + image);
        } else {
            alert("Upload Gif or Jpg images only");
            //fup.focus();
            return false;
        }

    }


}