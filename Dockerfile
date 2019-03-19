FROM php:8-apache
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get -qq update && apt-get -qq install less && docker-php-ext-install mysqli
