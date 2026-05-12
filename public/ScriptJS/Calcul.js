// Tarif de base par personne
const BASE_TARIFF = 15;

// Fonction pour calculer le coût total
function calculateCost(adults, childrenUnder12, children12to16, children16to18) {
    let totalCost = 0;

    // Coût pour les adultes (pas de remise)
    totalCost += adults * BASE_TARIFF;

    // Coût pour les enfants de moins de 12 ans (remise de 30%)
    totalCost += childrenUnder12 * BASE_TARIFF * (1 - 0.30);

    // Coût pour les enfants de 12 à 16 ans (remise de 20%)
    totalCost += children12to16 * BASE_TARIFF * (1 - 0.20);

    // Coût pour les enfants de 16 à 18 ans (remise de 10%)
    totalCost += children16to18 * BASE_TARIFF * (1 - 0.10);

    return totalCost;
} 

// Fonction qui est appelée lors du clic sur le bouton "Calculer"
document.getElementById('calculateurForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Récupérer les valeurs des champs
    const adults = parseInt(document.getElementById('adults').value);
    const childrenUnder12 = parseInt(document.getElementById('childrenUnder12').value);
    const children12to16 = parseInt(document.getElementById('children12to16').value);
    const children16to18 = parseInt(document.getElementById('children16to18').value);

    // Calculer le coût
    const totalCost = calculateCost(adults, childrenUnder12, children12to16, children16to18);

    // Afficher le résultat
    document.getElementById('result').innerText = `Le coût total annuel est de : ${totalCost.toFixed(2)} €`;
});
