# syntax=docker/dockerfile:1
FROM php:8.1-fpm
# instalação de dependencias do sistema
RUN apt-get update && apt-get install -y \ 
    git \ 
    curl \ 
    libpng-dev \ 
    libonig-dev \ 
    libxml2-dev \ 
    zip \ 
    unzip

# instalação de extenções do php
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Obtenha o Composer mais recente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crie um usuário do sistema para executar os comandos Composer e Artisan
# RUN useradd -G www-data,root -u $uid -d /home/$user $user
# RUN mkdir -p /home/$user/.composer && \
#     chown -R $user:$user /home/$user \

# Definir diretório de trabalho
WORKDIR /var/www

RUN ln -s public html

# EXPOSE 9000 8000

ENTRYPOINT [ "php-fpm" ]
# USER $user

# DELETAR IMAGENS: docker rmi -f $(docker images -aq)
