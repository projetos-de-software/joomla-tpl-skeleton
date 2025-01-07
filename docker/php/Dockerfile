FROM php:8.3-fpm-alpine

RUN apk add --update --no-cache --virtual .build-deps \
  linux-headers g++ make autoconf yaml-dev

RUN apk update --no-cache && apk add \
  libmcrypt-dev \
  oniguruma-dev \
  libxml2-dev \
  icu-dev \
  tzdata \
  postgresql-dev \
  freetype-dev \
  libjpeg-turbo-dev\
  libpng-dev \
  zlib-dev \
  libzip-dev \
  zip

RUN pecl install redis \
  pecl install xdebug \
  pecl install mcrypt

RUN docker-php-ext-configure zip

RUN docker-php-ext-install intl
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install sockets
RUN docker-php-ext-install gd
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install calendar
RUN docker-php-ext-install pdo pdo_pgsql
RUN docker-php-ext-install zip

RUN docker-php-ext-enable redis.so xdebug.so 

RUN rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

COPY php.ini /usr/local/etc/php/php.ini

RUN addgroup --gid 1000 marcos
RUN adduser --disabled-password --ingroup marcos --shell /bin/sh marcos 
USER marcos

CMD ["php-fpm"]