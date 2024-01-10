function checkMail(){
    let mail = document.querySelector("register-email")
    let content = mail.value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (content.match(validRegex)) {
        alert('email correct')
    }else{
        alert("non");
    }
}

function checkPass(){
    
}

function testForm(){
    checkMail();
    checkPass();
}

let registerButton = document.querySelector("register-submit");
registerButton.onclick = testForm();