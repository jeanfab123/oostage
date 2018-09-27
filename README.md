LDC (ligne de commande) : Récupérer sur GitHub le projet dans un répertoire

    git clone git://github.com/jeanfab123/oostage.git

Installer NodeJS

    https://nodejs.org/

Installer Composer

    https://getcomposer.org/download/

LDC : "Updater" Symfony

    composer update

LDC : Installer Doctrine (si la commande précédente ne l'a pas déjà fait)

    composer require symfony/orm-pack
    composer require symfony/maker-bundle --dev

Editeur : Modifier le fichier /.env

    DATABASE_URL=mysql://login:pass@server:port/oostage

    (remplacer login, pass et port par ceux de votre config MySQL)

LDC : Création de la BDD

    php bin/console doctrine:database:create

LDC : Migration de la BDD

    php bin/console make:migration
    php bin/console doctrine:migrations:migrate

LDC : Lancement du serveur

    php bin/console server:run

Tester le site (vérifier l'id du port)

    http://127.0.0.1:8000/

LDC : Installer Encore (pour JS et CSS)

    composer require Encore

Installer Yarn :

    https://yarnpkg.com/

LDC : Installer Yarn pour le projet :

    yarn install

LDC : Installer le loader SASS

    yarn add sass-loader node-sass --dev

LDC : lancer le watcher SASS

    yarn run encore dev --watcher

    (à chaque compilation, il créera les fichiers /public/build/css/style.css et /public/build/js/js.js)

