1. Crear proyecto:
curl -s "https://laravel.build/aiudo-vistas?php=74" | bash

2. Abrir el docker.compose:
code aiudo-vistas/docker-compose.yml

3. Reemplazar "context: ./vendor/laravel/sail/runtimes/8.2" por:
context: ./vendor/laravel/sail/runtimes/7.4

4. Abrir el Dockerfile:
code aiudo-vistas/vendor/laravel/sail/runtimes/7.4/Dockerfile

5. Reemplazar "ARG NODE_VERSION=16" por:
ARG NODE_VERSION=18

6. Mover al directorio principal del proyecto:
cd aiudo-vistas

7. Hacer un build:
./vendor/bin/sail build --no-cache

8. Arrancar el contenedor:
./vendor/bin/sail up -d
