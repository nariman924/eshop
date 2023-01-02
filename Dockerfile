FROM php:7.4.3-apache

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg

RUN apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN usermod -u 1000 www-data
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html