function pustiPesmu(pesma)
{
    $('#PesmaPlay').attr('src',pesma);
    $('#PesmaPlay')[0].play();
}
function validacijaReg(){
    var Ime = document.forms['RegFor0']['Ime'].value;
    
    if(Ime === "st")
    {
        document.getElementById('ImeError').innerHtml = "Greska:Ime je obavezno";

    }
   
    return false;
        
}

