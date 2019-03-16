
function controlFirstName(champ){

    if(champ.value == ""){
        
        document.getElementById("fisrtNameAlert").innerHTML = "entrez un nom";
        champ.style.border = "1px solid red";
        return false;

    }else{
        document.getElementById("fisrtNameAlert").innerHTML = "";
        champ.style.border = "";
        return true;

    }

}


function controlLastName(champ){
    if(champ.value == ""){
        
        document.getElementById("lastNameAlert").innerHTML = "entrez un prenom";
        champ.style.border = "1px solid red";
        return false;
    }else{
        document.getElementById("lastNameAlert").innerHTML = "";
        champ.style.border = "";
        return true;
    }
}

function controleAdresse(champ){
    if(champ.value == ""){
        document.getElementById("adresseAlert").innerHTML = "entrez une adresse";
        champ.style.border = "1px solid red";
        return false;
    }else{
        document.getElementById("adresseAlert").innerHTML = "";
        champ.style.border = "";
        return true;
    }
}

function controleCodePostale(champ){

    var regex =  /^[0-9]*$/;
    if(champ.value == "" || !regex.test(champ.value)){
        document.getElementById("codePostaleAlert").innerHTML = "entrez un code postale";
        champ.style.border = "1px solid red";
        return false;
    }else{
        document.getElementById("codePostaleAlert").innerHTML = "";
        champ.style.border = "";
        return true;

    }
}

function controleTelephone(champ){
    var regex =  /^[0-9]*$/;
        if(champ.value == ""){
            document.getElementById("phoneAlert").innerHTML = "entrez le numero de telephone";
            champ.style.border = "1px solid red";
        }
        else if(!regex.test(champ.value)){
            
            document.getElementById("phoneAlert").innerHTML = "entrez un numero de telephone valide";
            champ.style.border = "1px solid red";
            return false;
        }else{
            document.getElementById("phoneAlert").innerHTML = "";
            champ.style.border = "";
            return true;
        }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
    document.getElementById("emailAlert").innerHTML = "entrez une adresse email valide";        
    champ.style.border = "1px solid red";
      return false;
   }
   else
   {
    document.getElementById("emailAlert").innerHTML = "";        
    champ.style.border = "";
      return true;
   }
}





function submit(){
    var nom = controlFirstName(document.getElementById("firstName"));
    var prenom = controlLastName(document.getElementById("lastName"));
    var code = controleCodePostale(document.getElementById("postalCode"));
    var adresse = controleAdresse(document.getElementById("addressDetail"));
    var telephone = controleTelephone(document.getElementById("phoneNumber"));
    var email = verifMail(document.getElementById("emailAddress"));
    if(nom && prenom && adresse && code && telephone && email){
        
        alert("Next");
    }
}