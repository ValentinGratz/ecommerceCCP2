# ecommerce
 
Application du HTTPS dans le fichier config/packages/security.yaml comme ceci :

        - { path: ^/profile, roles: ROLE_USER, requires_channel: https }

Arrêt de l'exercice pour ce jour (14/01), je vais d'erreur en erreur.

Mauvaise isntallation de vishuploader, ensuite, essayer de le désinstaller pour le réinstaller en suivant des forums (qui ne fonctionne pas).
J'ai au final supprimer le dossier "vendor" que je n'arrive poas à remettre. 

Pour le git, j'ai du aussi reconfigurer, reclonner avec le logiciel github (bientôt le chemin pourrais être ecommerceCCP2/ecommerce/../.../.../ les fichiers. 

Changelog :
* dossier vendor recréer, mais nouvelle erreur 
```
Fatal error: Uncaught Error: Class 'Symfony\Component\Dotenv\Dotenv' not found in C:\Users\Stagiaire\Desktop\CCP2\ecommerce\public\index.php:10 Stack trace: #0 {main} thrown in C:\Users\Stagiaire\Desktop\CCP2\ecommerce\public\index.php on line 10
```
