FROM php:7-apache

RUN a2enmod rewrite
RUN apt-get update \
	&& apt-get -y install libmysqlclient-dev git \
	&& rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install -j$(nproc) pdo_mysql
COPY php.ini /usr/local/etc/php/

RUN git clone https://github.com/KDE/kuserfeedback.git /kuserfeedback \
	&& cp -a /kuserfeedback/src/server/. /var/www/html \
	&& rm -rf /kuserfeedback
ADD config /var/www/html/config
