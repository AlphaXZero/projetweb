# 1. Create the config
sudo nano /etc/apache2/sites-available/mysite.conf
# 2. Paste this
```bash
<VirtualHost *:80>
    ServerName mysite.local
    ServerAlias www.monsite.local
    DocumentRoot /var/www/mysite

    ErrorLog ${APACHE_LOG_DIR}/mysite-error.log
    CustomLog ${APACHE_LOG_DIR}/mysite-access.log combined
</VirtualHost>
``` 
# 3. Enable and reload
```bash
sudo a2ensite mysite.conf
sudo systemctl reload apache2
```
# 4. Add to `/etc/hosts`
```bash
127.0.0.1   mysite.local
```