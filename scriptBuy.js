function validation(){
    var adresa=document.getElementById("adresa").value;
    var emriMbiemri=document.getElementById("emri").value;
    var nrKarteles = document.getElementById("nrcard").value;
    if(!(nrKarteles.length===16)){
        alert("Credit numbar has to be exactly 16 digits");
    }else if(emriMbiemri.length<8){
        alert("Please fill the name with real names and lastnames");
    }
    else if(adresa.length<8){
        alert("Adress has to cantain more than 7 letters");
    }
    else{
        alert("Thankk you for buying our product ,We hope you will like it")
    }
}
console.log("test");