FROM php:7.1.31-apache

RUN apt-get update
RUN apt-get install -y zip unzip
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html
COPY ./app/composer.json ./
COPY ./docker/dependencies/install /etc/init.d/install
RUN chmod +x /etc/init.d/install
CMD /etc/init.d/install