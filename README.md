# ecommerce
 
Application du HTTPS dans le fichier config/packages/security.yaml comme ceci :

        - { path: ^/profile, roles: ROLE_USER, requires_channel: https }
