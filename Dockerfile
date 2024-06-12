# Use the official PHP Apache base image
FROM php:apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Grant the web server permission to read the .htaccess file
RUN chown -R www-data:www-data /var/www/html

# Ensure permissions for .htaccess
RUN chmod 644 /var/www/html/.htaccess

# Expose port 80
EXPOSE 80
