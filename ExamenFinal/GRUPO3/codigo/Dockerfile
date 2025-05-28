# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Habilitar módulos de Apache necesarios
RUN a2enmod rewrite

# Instalar extensiones de PHP necesarias, incluyendo mysqli
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Copiar el código fuente del proyecto dentro del contenedor
COPY . /var/www/html/

# Cambiar permisos para asegurar que Apache pueda acceder a los archivos
RUN chown -R www-data:www-data /var/www/html/

# Configuración de Apache para permitir la reescritura de URLs
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exponer el puerto 80 (predeterminado de Apache)
EXPOSE 80

# Iniciar Apache en el contenedor
CMD ["apache2-foreground"]
