# Test
Voici une modification

# Mise en place de l'environnement

git remote add origin https://github.com/votre-user/nouveau-repo.git

Ajoute une nouvelle référence à un dépôt distant


Pourquoi c'est essentiel ?

Sans remote, votre code reste seulement en local
Cela permet de :
-Pousser (git push) votre code vers GitHub
-Récupérer (git pull) les modifications des autres
-Synchroniser votre travail avec l'équipe



# Vérification remote
git remote -v




# Option 2 - Utiliser main (recommandé) :
git branch -M main
git push -u origin main

# Protéger la branche main (après le premier push)
git config --global push.default current




git commit -m "Initial commit - Fresh Laravel installation"

git status # Montre les modifications ou Vérifier l'état actuel

git check-ignore -v nom-de-fichier  # Vérifie pourquoi un fichier est ignoré

git diff  # Montre les modifications non stagées


# Faire des modifications

git clone votre-repo.git
cp .env.example .env  # Crée le fichier .env
composer install      # Installe les dépendances PHP
npm install           # Installe les dépendances JS


