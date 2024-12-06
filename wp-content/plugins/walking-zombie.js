document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        // Créer le conteneur du zombie
        const zombieDiv = document.createElement('div');
        zombieDiv.id = 'zombie-walker';

        // Tableau d'images
        const images = [
            'http://localhost/RimBank/wp-content/plugins/hal.gif',
            'http://localhost/RimBank/wp-content/plugins/ouf.gif',
            'http://localhost/RimBank/wp-content/plugins/danse.gif'
        ];

        // Sélectionner aléatoirement une image
        const randomImage = images[Math.floor(Math.random() * images.length)];

        // Ajouter l'image aléatoire
        const zombieImg = document.createElement('img');
        zombieImg.src = randomImage;
        zombieImg.alt = 'Zombie marchant';

        // Ajouter l'image au conteneur
        zombieDiv.appendChild(zombieImg);

        // Ajouter le conteneur au body
        document.body.appendChild(zombieDiv);

        // Faire entrer le zombie sur l'écran avec une animation
        setTimeout(() => {
            zombieDiv.style.transform = 'translate(-50%, -50%) scale(1)'; // Animation de transition pour le mouvement
        }, 100);

        // Supprimer le zombie après 15 secondes
        setTimeout(() => {
            document.body.removeChild(zombieDiv);
        }, 15000); // Ajustez la durée si nécessaire
    }, 30000); // Apparition après 30 secondes
});
