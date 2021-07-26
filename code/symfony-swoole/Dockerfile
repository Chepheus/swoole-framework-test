FROM phpswoole/swoole:4.7-php8.0

RUN apt update && apt upgrade -y
RUN pecl install inotify

COPY ./ini/inotify.ini /usr/local/etc/php/conf.d/inotify.ini


#CMD ["php", "/var/www/bin/console", "swoole:server:run", "--api"]