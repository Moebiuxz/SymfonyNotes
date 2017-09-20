# SymfonyNotes

Crear proyecto con composer

´composer create-project symfony/framework-standard-edition nombrePro "3.0.*"´

Crear un nuevo Bundle

´php bin/console generate:bundle --namespace=BackendBundle --format=yml´

Mapear la base de datos en el proyecto

´php bin/console doctrine:mapping:import BackendBundle yml´

Generar las entidades

´php bin/console doctrine:generate:entities BackendBundle´

