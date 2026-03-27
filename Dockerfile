FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 \
    php8.1 \
    php8.1-mysql \
    libapache2-mod-php8.1 \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

# Supprimer tous les sites par défaut
RUN rm -f /etc/apache2/sites-enabled/* \
    && rm -f /var/www/html/index.html

# Créer le vhost
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    DirectoryIndex index.php index.html\n\
    <Directory /var/www/html>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-enabled/project.conf

# Activer le module PHP
RUN a2enmod php8.1

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]