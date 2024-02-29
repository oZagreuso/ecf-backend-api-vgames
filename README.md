# ecf-backend-api-vgames

## Contexte

La Gizmondo est une console de jeux vidéo portable faisant également office d'appareil photo, GPS, lecteur audio/vidéo... Elle fut fabriquée de 2005 à 2008 par Tiger Telematics.

### Spécifications techniques
- CPU : Samsung 400 MHz ARM9
- GPU : NVIDIA GoForce 3D 4500
- Mémoire graphique: 1.2MB 128-bit SRAM 
- RAM: 128 MB 16-bit DDR 200Mhz
- ROM: 64 MB 
- Affichage : écran TFT couleur de 2,8 pouces 
- Palette graphique : 65 536 couleurs
- Résolution : 240×320 pixels
- Son : stéréo
- Autonomie : 4h en mode jeu, 3h en mode film, 12h en mode audio et 100h en veille.
- Dimensions : 138 × 82 × 32 mm
- Poids : 150g
- Autres : bluetooth 2, lecteur MP3, système de localisation GPS, lecteur de cartes mémoire SD, SMS/MMS, appareil photo numérique.

## Préparation.

Faites un FORK du dépôt du votre compte Github.

Cloner le dépôt en local et positionner vous dans le répertoire `symfony` avec votre terminal

Installer les dépendances : `composer install`

Démarrer le serveur web : `php -S localhost:3000 -t public`

Accéder à la page web à analyser: [http://localhost:3000/gizmondo.html](http://localhost:3000/gizmondo.html)


## Travail à réaliser

Dans le dossier public, vous trouverez une page web `gizmondo.html` qui liste les jeux de la console Gizmondo.

Votre travail consiste à créer les entités de l'API qui permet de faire fonctionner la page web.

Vous ne devez, en aucun cas, modifier le code HTML, CSS ou JS présent dans le dossier `public`. Toute modification de ce code sera éliminatoire !

2 entités sont attendues : 
- Gizmondo
- Publisher

Les données du jeu d'essai sont disponibles sous forme d'insertions SQL dans le répertoire `_docs` du projet.
