document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); 

            // On évite les doublons si on clique plusieurs fois
            const existingMsg = document.querySelector('.alert-success');
            if (existingMsg) existingMsg.remove();

            // Création de l'élément
            const successDiv = document.createElement('div');
            
            // ON APPLIQUE LA CLASSE CSS ICI
            successDiv.classList.add('alert-success');
            
            // LE TEXTE
            successDiv.innerText = "Votre message a bien été envoyé !";

            // INSERTION DANS LE HTML
            const container = document.querySelector('.formulaire1');
            container.prepend(successDiv);

            // RESET DU FORMULAIRE
            form.reset();
        });
    }
});