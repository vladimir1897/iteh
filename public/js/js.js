function pustiPesmu(pesma,play_id)
{
    if($('#PesmaPlay').attr('src') === pesma){
        $('#PesmaPlay')[0].pause();
        $('#PesmaPlay').attr('src','');
        $('#'+play_id).html('play');
        return false;
    }
    $('#'+play_id).html('stop');
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

