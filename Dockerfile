FROM php:7.2-fpm-alpine3.7

#替换国内镜像
COPY deploy/source.list /etc/apk/repositories

RUN apk update && apk --no-cache add freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev curl zlib-dev \
 && docker-php-ext-configure gd \
  --with-gd \
  --with-freetype-dir=/usr/include/ \
  --with-png-dir=/usr/include/ \
  --with-jpeg-dir=/usr/include/ \
  --with-zlib-dir=/usr \
 && NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) \
 && docker-php-ext-install -j${NPROC} gd zip pdo_mysql mbstring exif \
 && apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

RUN wget https://dl.laravel-china.org/composer.phar -O /usr/local/bin/composer \
 && chmod a+x /usr/local/bin/composer

WORKDIR /var/www/

CMD ["php-fpm"]