/*
function verification(){
    let password = document.getElementById("password").value;
    let password1 = document.getElementById("password1").value;

    if(password == password1){
        document.form.submit();
    }
    else{
        alert("les mots de passe ne sont pas identiques");
    }
} 
*/

function verification(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

    const motDePasse1 = document.getElementById('password').value;
    const motDePasse2 = document.getElementById('password1').value;

    if (motDePasse1 === motDePasse2) {
        document.getElementById('formulaire').submit(); // Envoie le formulaire
    } else {
        alert("Les mots de passe ne correspondent pas. Veuillez réessayer.");
    }
}