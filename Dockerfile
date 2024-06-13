# Use the official PHP image as a base
FROM php:7.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the ServerName directive globally to suppress the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

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
