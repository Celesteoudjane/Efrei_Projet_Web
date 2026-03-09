document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); 

            // pas de double 
            const existingMsg = document.querySelector('.alert-success');
            if (existingMsg) existingMsg.remove();

            // crea de l'element 
            const successDiv = document.createElement('div');
            
            // le css
            successDiv.classList.add('alert-success');
            
            // texte succes
            successDiv.innerText = "Votre message a bien été envoyé !";

            const container = document.querySelector('.formulaire1');
            container.prepend(successDiv);

            // reset formulaire 
            form.reset();
        });
    }
});