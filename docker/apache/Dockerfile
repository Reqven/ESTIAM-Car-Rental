FROM php:7.1.31-apache

RUN apt-get update
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo 
RUN docker-php-ext-install pdo_mysql
RUN apt-get install -y nano
RUN apt-get install -y zip unzip
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install tokenizer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"