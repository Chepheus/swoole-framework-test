FROM phpswoole/swoole:4.7-php8.0

RUN apt update && apt upgrade -y
RUN docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install pcntl

RUN apt install nodejs -y
RUN apt install npm -y

RUN npm install --save-dev chokidar

#CMD ["php", "artisan", "octane:start", "--watch", "--port=8000", "--host=0.0.0.0"]
