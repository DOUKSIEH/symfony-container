# Le container de services de Symfony

1. Clonez le dépôt
2. Rendez vous dans le dossier
3. Installez les dépendances avec `composer ( ou composer.phar) install`
4. Lancez les migrations en tapant `php bin/console d:m:m`
5. Lancez les fixtures en tapant `php bin/console d:f:l`
6. Lancez le serveur avec `php bin/console s:r`
7. Installez Markdown : `composer require cebe/markdown`



Autowiring : le container devine ce dont on a besoin grâce aux paramètres de la fonction.

Container: une boîte qui contient des services

Mission du container : construire des instances des objects à partir des classes qu'il connait.

Commande importante : `php bin/console debug:autowiring --all`

https://symfony.com/doc/current/service_container.html 

