function validation(){
    var pass1=document.getElementById("confirm-pass").value;
    var pass=document.getElementById("passwordi").value;
    var usernami=document.getElementById("usernami").value;
    var reg=/^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+([A-Za-z]{2,4})/;
    var email=document.getElementById("email").value;
    if(reg.test(emaili.value)==false){
        alert("Enter a valid Email")     
    }else if(usernami.length<4){
        alert("Usernami must have 4 or more characters");
    }else if(pass.length<6){
        alert("Password must have 6 or more characters");
    }
    else if(pass1.length<6){
        alert("Fill the (Confirm password) input")
    }
    else if(!(pass===pass1)){
        alert("Passwords must be the same");
    }else{
        alert("Your registration is completed succesfully")
    }
}