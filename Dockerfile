# Ahmet Turkmen 

FROM composer AS composer

WORKDIR /app

COPY composer.json /app
COPY composer.lock /app

RUN composer i  --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist


FROM php:7.4-fpm-alpine

RUN apk --update add \
      g++ make \
      libxml2-dev \
    && docker-php-ext-install \
        pdo_mysql \
    && apk del autoconf g++ make libxml2-dev \
    && rm -rf /var/cache/apk/*

WORKDIR /app

COPY . /app

COPY --from=composer /app/vendor /app/vendor

COPY ./serve.sh /tmp

RUN chmod +x /tmp/serve.sh

ENTRYPOINT [ "/tmp/serve.sh" ] 
