document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); 

            
            const formData = new FormData(form);

        
            fetch('formulaire.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                
                console.log("Réponse du serveur :", data);
                
                // mess vert
                const existingMsg = document.querySelector('.alert-success');
                if (existingMsg) existingMsg.remove();

                const successDiv = document.createElement('div');
                successDiv.classList.add('alert-success');
                successDiv.innerText = "Votre message a bien été envoyé !";

                const container = document.querySelector('.formulaire1');
                if (container) {
                    container.prepend(successDiv);
                }

                // vide les champ du formulaire 
                form.reset();
            })
            .catch(error => {
                console.error("Erreur lors de l'envoi:", error);
                alert("Une erreur est survenue lors de l'envoi.");
            });
        });
    }
});