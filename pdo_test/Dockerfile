# Dockerfile
FROM php:8.0-apache

# Instala las extensiones necesarias para PDO y MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Habilita el módulo de Apache necesario para PHP
RUN a2enmod rewrite

# Reinicia el servicio de Apache
RUN service apache2 restart
