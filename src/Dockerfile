FROM php:8.0.5-fpm 
 
RUN docker-php-source extract && docker-php-source delete && docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get update && apt-get install -y libzip-dev zip \ 
    && docker-php-ext-install zip 
 
# Install Composer 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer