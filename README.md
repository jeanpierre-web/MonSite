# MonSite - Services de Développement Web et de Marketing Digital

Bienvenue sur MonSite, un projet de site web pour promouvoir les services de développement web, montage vidéo, et marketing digital.
j'ai cré ce petit site en voulant apprend à utiliser la fonction mail de php et phpMail

## Fonctionnalités

- **Développement Web** : Création de sites web sur mesure.
- **Marketing Digital** : Stratégies SEO, publicité payante et gestion des réseaux sociaux.
- **Montage Vidéo** : Vidéos promotionnelles, clips musicaux, et films d'entreprise.

## Structure du Projet

- `index.html` : La page principale avec des sections pour les services, à propos, réalisations, équipe, contact, et localisation.
- `process_form.php` : Script PHP pour traiter les soumissions du formulaire de contact.
- `css/` : Dossier contenant les fichiers CSS.
- `img/` : Dossier contenant les images utilisées dans le site.
- `js/` : Dossier contenant les fichiers JavaScript.

## Installation

### Prérequis

- Un serveur web avec support PHP (par exemple, Laragon)
- Composer (pour gérer les dépendances PHP)

### Étapes

1. Clonez ce dépôt sur votre machine locale :
    ```sh
    git clone https://github.com/votre-utilisateur/votre-depot.git
    ```

2. Déplacez-vous dans le répertoire du projet :
    ```sh
    cd votre-depot
    ```

3. Démarrez votre serveur web (par exemple, Laragon) et assurez-vous que le répertoire du projet est accessible.

## Utilisation

1. Ouvrez `index.html` dans votre navigateur pour voir la page d'accueil du site.
2. Remplissez le formulaire de contact et soumettez-le pour tester l'envoi d'e-mail.
3. Les messages de confirmation ou d'erreur apparaîtront dans un modal.

## Personnalisation

### Modifier le destinataire des e-mails

1. Ouvrez le fichier `process_form.php`.
2. Remplacez l'adresse e-mail par défaut par la vôtre :
    ```php
    $to = "votre-email@example.com";
    ```

### Ajouter de nouveaux services ou projets

1. Ajoutez de nouvelles sections dans le fichier `index.html`.
2. Ajoutez les images correspondantes dans le dossier `img/`.

## Contribuer

Les contributions sont les bienvenues ! Veuillez suivre ces étapes pour contribuer :

1. Fork le dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/nouvelle-fonctionnalite`).
3. Committez vos modifications (`git commit -am 'Ajoute une nouvelle fonctionnalité'`).
4. Poussez votre branche (`git push origin feature/nouvelle-fonctionnalite`).
5. Ouvrez une Pull Request.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Contact

Pour toute question, n'hésitez pas à me contacter à jeanpierreamony@gmail.com .

