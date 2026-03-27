FROM php:8.2-apache

# Désactiver le MPM par défaut et activer mpm_prefork
RUN a2dismod mpm_event && a2enmod mpm_prefork

# Extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copie tous les fichiers dans le dossier Apache
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html