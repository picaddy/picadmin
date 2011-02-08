1) Installation Git sous Ubuntu
	- apt-get install git, git-core
	- git config --global user.name votre nom
	- git config --global user.email votre email

2) Configuration GitHub
	- Connectez vous sur github avec le compte picaddy
	- Copie votre clé publique dans la gestion des clés du compte
	- Si vous ne l'avez pas, regarder la doc : http://help.github.com/linux-key-setup/
	
3) Récupération du dépot 
	- Accèder à votre www de votre LAMP
	- git clone git@github.com:picaddy/picadmin.git
	- Récupération terminée !

4) Installation et Configuration Netbeans sous ubuntu
	- http://doc.ubuntu-fr.org/netbeans
	- Version française disponible via la doc.
	
	- Ubuntu 10.10 
		- Problème de JDK : utilisation de java-6sun à la place d'OpenJDK utilisée depuis la 10.10 (souci de cases à cochées avec netbeans)
		- Configuration Java : http://doc.ubuntu-fr.org/java
	
	- Créer un nouveau projet avec sources existantes et choisissez le dossier picadmin (véréfier les droits d'écritures sur le dossier)
	- Netbeans reconnait automatiquement un projet symfony ! Vous pouvez commencer à travailler sur le code :)

5) Configuration Picadmin 
	- configurer votre base de données via l'invite de commande :
		php symfony configure:database "mysql:host=localhost;dbname=nomdevotrebdd" nomdutilisateur motdepasse

	- exécuter la commande suivante pour générer la base et insérer le jeu d'essai :
		php symfony doctrine:build --all --no-confirmation

	- Allez voir http://localhost/picadmin/web ou autre si vous avez configuré une url comme http://dev.picadmin.com
	- Aller voir la base de donnée pour vérifier que les fixtures et tables sont bien là

6) Commandes Git
	- Lorsque vous faites des modifications sur des fichiers :
		- Vérifier que vous avez la dernière version de ceux ci via un "git pull"
		- Regarder les modifications via un "git log" et "git diff"
		- Faite un commit via "git commit" -m "Modification css" 
		- Envoyez le commit aux autres et à github via "git push" ou "git push origin master"
	
