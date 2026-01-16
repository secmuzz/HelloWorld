dockerfile# Use official PHP with Apache
FROM php:8.3-apache

# Copy the PHP file to web root
COPY index.php /var/www/html/index.php

# Optional: Enable Apache rewrite module if needed (not required here)
# RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Default command (from base image)
CMD ["apache2-foreground"]
