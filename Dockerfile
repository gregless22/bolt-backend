FROM php:7.2-apache

WORKDIR /var/www/html/
COPY composer.json /var/www/html/
COPY apache.conf /etc/apache2/sites-enabled/

RUN rm /etc/apache2/sites-enabled/000-default.conf \
  && a2enmod rewrite

# install linux extensions
RUN apt-get update && apt-get install -y \
    unzip \
    wget \
    ntp \
    gnupg \
    zip \
    git \
    libpq-dev 

# instal docker extensions
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  # && docker-php-ext-install pdo pdo_pgsql pgsql
  && docker-php-ext-install pdo_pgsql pgsql \
  && curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer

# this puts the vendor bin propeinto the global path
ENV PATH="$PATH:~/.composer/vendor/bin:./vendor/bin"

