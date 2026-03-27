FROM php:8.2-apache

# Désactiver tous les MPM puis activer uniquement prefork
RUN a2dismod mpm_event mpm_worker mpm_prefork 2>/dev/null; a2enmod mpm_prefork

# Extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copie tous les fichiers dans le dossier Apache
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html