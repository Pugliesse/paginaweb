FROM php:8.2-apache

# Activar mod_rewrite para URLs amigables
RUN a2enmod rewrite

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cambiar el DocumentRoot de Apache a /public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf /etc/apache2/apache2.conf

# Copiar todo el proyecto al contenedor
COPY . /var/www/html

# Permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Instalar dependencias de Composer
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
