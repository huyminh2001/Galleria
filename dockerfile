# Use the official PHP image with Apache for XAMPP-like functionality
FROM php:8.2-apache

# Update DocumentRoot to Laravel's public directory
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && echo '<Directory "/var/www/html/public">\n\tAllowOverride All\n</Directory>' >> /etc/apache2/sites-available/000-default.conf

# Restart Apache service
RUN service apache2 restart

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install necessary extensions for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install Laravel dependencies
RUN composer install

# Set permissions for Laravel folders
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage


RUN chown -R www-data:www-data /var/www/html/app/Http/Controllers/admin
RUN chown -R www-data:www-data /var/www/html/resources/views/admin
RUN chmod -R 755 /var/www/html/app/Http/Controllers/admin
RUN chmod -R 755 /var/www/html/resources/views/admin
RUN chown -R www-data:www-data /var/www/html/app/Http/Middleware
RUN chmod -R 755 /var/www/html/app/Http/Middleware
RUN chmod -R 775 /var/www/html/storage/framework/sessions

# Expose the default port
EXPOSE 80