function validation(){
    var pass=document.getElementById("password").value;
    var usernami=document.getElementById("username").value;
    if(usernami.length<4){
        alert("Usernami must have 4 or more characters");
    }else if(pass.length<6){
        alert("Password must have 6 or more characters");
    }else{
        alert("Sign in form is valid")
    }
}