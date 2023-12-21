# Usar una imagen oficial de PHP con Apache
FROM php:8.0-apache

# Instalar las extensiones necesarias para PDO y MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar el módulo de Apache necesario para PHP
RUN a2enmod rewrite

# Descargar e instalar Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar los archivos del proyecto
COPY . .

# Instalar dependencias con Composer
# Nota: Esto asume que tienes un archivo composer.json en tu proyecto
# RUN composer install --no-interaction --no-dev --prefer-dist

# Apache se inicia automáticamente cuando el contenedor se ejecuta, por lo que no es necesario reiniciar Apache aquí

# No es necesario especificar un comando para ejecutar las pruebas aquí.
# Puedes ejecutar las pruebas manualmente desde dentro del contenedor o especificar un comando en un script de CI/CD.
