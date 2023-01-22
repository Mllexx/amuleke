FROM php:8.2-fpm
## DEFINE ARGUMENTS
ARG user
ARG uid
## INSTALL DEPENDENCIES
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    zip \
    unzip \
    wget \
    supervisor \
    git \
    sudo \
    vim \
    nano \
    net-tools \
    libcurl4-openssl-dev \
    libc-client-dev \
    libkrb5-dev\
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl
## CLEAR CACHE
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
## INSTALL PHP EXTENSIONS
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl ctype xml soap pgsql curl imap bcmath gd
## CLEANUP
RUN apt-get clean
# GET COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
##
COPY ./docker-compose/supervisord/supervisor.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker-compose/nginx/entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh
##CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
ENTRYPOINT ["bash", "/etc/entrypoint.sh"]
# SET WORKING DIRECTORY
WORKDIR /var/www
