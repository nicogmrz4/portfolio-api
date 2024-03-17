#!/bin/bash

# CREATE DB IF NOT EXIST

php bin/console doctrine:database:create -n --if-not-exists

# DB MIGRATIONS

php bin/console doctrine:migrations:diff -n
php bin/console doctrine:migrations:migrate -n

# RUN APACHE

php bin/console security:hash-password -n $ADMIN_PASSWORD 

apache2-foreground