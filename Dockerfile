# Dockerfile
FROM php:8.2-apache

# Extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copie tous les fichiers dans le dossier Apache
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html