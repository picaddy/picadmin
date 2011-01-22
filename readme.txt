Pour installer symfo à partir de git :

- copier les fichiers dans votre dossier web
- configurer votre base de données via l'invite de commande :

php symfony configure:database "mysql:host=localhost;dbname=nomdevotrebdd" nomdutilisateur motdepasse

- exécuter la commande suivante pour générer la base et insérer le jeu d'essai :

php symfony doctrine:build --all --no-confirmation
