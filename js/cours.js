// coché none
document.addEventListener('DOMContentLoaded', function() {
    const checkboxNone = document.getElementById('no_salle');
    const inputSalle = document.getElementById('salle');

    if (checkboxNone && inputSalle) {
        checkboxNone.addEventListener('change', function() {
            if (this.checked) {
                // si coché 
                inputSalle.value = "none";
                inputSalle.disabled = true;
                inputSalle.style.backgroundColor = "#f0f0f0";
                inputSalle.style.opacity = "0.6";
            } else {
                // si décoché 
                inputSalle.value = "";
                inputSalle.disabled = false;
                inputSalle.style.backgroundColor = "white";
                inputSalle.style.opacity = "1";
            }
        });
    }
});

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche la page de se recharger

    // 1. Récupération des valeurs
    const intervenant = document.getElementById('nom').value;
    const niveau = document.getElementById('level').value;
    const cours = document.getElementById('name_course').value;
    const salle = document.getElementById('salle') ? document.getElementById('salle').value : "none";
    const modalite = document.getElementById('modalite') ? document.getElementById('modalite').value : "Présentiel";

    // 2. Sélection du corps du tableau
    const tableBody = document.querySelector('table tbody');

    // nouvelle ligne
    const newRow = document.createElement('tr');

    // selon le niveau, le badge change 
    let badgeClass = niveau.toLowerCase(); 

    newRow.innerHTML = `
        <td>${cours}</td>
        <td><span class="badge-niveau ${badgeClass}">${niveau}</span></td>
        <td>${intervenant}</td>
        <td>${salle}</td>
        <td>${modalite}</td>
    `;

    // ajout au tableau
    tableBody.appendChild(newRow);

    // nouveau formulaire 
    this.reset();
    alert("Cours ajouté avec succès !");
});