# ecommerce
 
Application du HTTPS dans le fichier config/packages/security.yaml comme ceci :

        - { path: ^/profile, roles: ROLE_USER, requires_channel: https }

Arrêt de l'exercice pour ce jour (14/01), je vais d'erreur en erreur.

Mauvaise isntallation de vishuploader, ensuite, essayer de le désinstaller pour le réinstaller en suivant des forums (qui ne fonctionne pas).
J'ai au final supprimer le dossier "vendor" que je n'arrive poas à remettre. 

Pour le git, j'ai du aussi reconfigurer, reclonner avec le logiciel github (bientôt le chemin pourrais être ecommerceCCP2/ecommerce/../.../.../ les fichiers. 

Essai de création d'une bibliothèque de médias (comme WordPress) à l'aide de MediaBundle(https://github.com/artgris/MediaBundle)

## Partie Administration
(20/01/2021)

Pour accéder aux pages admin (essai de création d'une page admin - comme un sommaire impossible), mettre ceci :

- /article/ : pour accéder à la liste des articles (édition, suppression...)
- /user/ : pour lister les utilisateurs inscrits.

# Exercice/CCP fini le 21 / 01 / 2021
