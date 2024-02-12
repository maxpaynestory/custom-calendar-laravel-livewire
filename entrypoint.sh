#!/bin/bash

# Set permissions
chmod -R 775 storage bootstrap/cache

# Set ownership
chown -R www-data:www-data storage

# Install Composer dependencies
if [ ! -f /var/www/html/vendor/autoload.php ]; then
    echo "Installing Composer dependencies..."
    composer install --no-scripts
fi

# Install MySQL PHP extension
docker-php-ext-install mysqli pdo pdo_mysql

# Start Apache
apache2-foreground
