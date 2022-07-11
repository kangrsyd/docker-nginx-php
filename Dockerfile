FROM php:8.1-fpm

# Update image dependencies
RUN apt-get update -y && apt-get install -y nginx nano git curl zip unzip libpng-dev zlib1g-dev && apt-get clean

# Install the PHP extensions for specified framework requirements
RUN docker-php-ext-install bcmath pdo_mysql mysqli gd zip
RUN docker-php-ext-enable mysqli

# Installing composer
ARG WITH_COMPOSER
RUN if [ $WITH_COMPOSER ]; \
    then curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer; \
    fi

COPY ./nginx/default.conf /etc/nginx/sites-enabled/default.conf
COPY --chown=www-data:www-data . /var/www
COPY boot.sh /etc/boot.sh

WORKDIR /var/www

EXPOSE 80 443

ENTRYPOINT ["/etc/boot.sh"]