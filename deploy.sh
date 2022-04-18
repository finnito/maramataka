#!/bin/bash

cd /srv/maramataka.lesueur.nz/

sudo git pull origin

# Do install things and make sure
# the cache doesn't get in the way.
sudo -u www-data composer install --profile
sudo -u www-data php artisan migrate --path=vendor/anomaly/streams-platform/migrations/application
sudo -u www-data php artisan migrate --all-addons
sudo -u www-data php artisan assets:clear
sudo -u www-data php artisan view:clear
sudo -u www-data php artisan httpcache:clear

# Make sure permissions are all good
sudo chown -R www-data:www-data ./
sudo chmod -R ug+rwx storage bootstrap/cache;
sudo -u www-data composer dump-autoload --profile
