FROM php:5.6-apache AS base
RUN docker-php-ext-install mysqli \
    && a2enmod rewrite
COPY init/mapos.conf /etc/apache2/conf-available/
COPY init/php-timezone.ini /usr/local/etc/php/conf.d/
RUN a2enconf mapos

FROM base AS builder
COPY --exclude=init/ . /var/www/html
RUN find /var/www/html -type f -exec chmod 644 '{}' \; \
    && find /var/www/html -type d -exec chmod 755 '{}' \;

FROM base
COPY --from=builder --chown=www-data:www-data /var/www/html /var/www/html

USER www-data
