FROM php:8.4-fpm-alpine

RUN apk update && apk add --no-cache \
  bash \
  git \
  postgresql-dev \
  libzip-dev \
  zip \
RUN rm -rf /var/cache/apk/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
CMD ["php-fpm", "-F"]
