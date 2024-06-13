# Use the official PHP image as a base, specifying PHP 8.0
FROM php:8.0-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the ServerName directive globally to suppress the warning
RUN echo "ServerName digitalnidom2.up.railway.app" >> /etc/apache2/apache2.conf

# Copy application files to the Apache directory
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set permissions for the Apache user
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
