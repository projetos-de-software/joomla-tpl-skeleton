#!/bin/sh

#
#   Arquivo de instalação para um servidor em Rocky Linux 9
#   @author Marcos de Lima Carlos <mlimacarlos@gmail.com>  
#   @version 0.1.0
#

# link de referência - https://docs.vultr.com/how-to-install-postgresql-on-rocky-linux-9

# atualização do servidor
dnf update -y 

# Instalação do Postgresql
dnf install postgresql postgresql-server -y

# Habilita o serviço do Postgresql
systemctl enable postgresql

# inicializa a base do postgres
postgresql-setup --initdb

# inicializa o serviço
systemctl start postgresql 

# Redis

# link referência - https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-redis-on-rocky-linux-9

dnf install redis -y 


# PHP

dnf module reset php
dnf module enable php:remi-8.4