function validation(){
    
    var email;
    email=document.getElementById("emaili").value;
    var reg=/^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+([A-Za-z]{2,4})/;
    if(reg.test(emaili.value)==false){
        alert("Enter a valid Email")     
    }
    else{
        alert("thanks for contacting us we'll be replying soon!")
    }
}