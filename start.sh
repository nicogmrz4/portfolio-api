#!/bin/bash

# CREATE DB IF NOT EXIST

php bin/console doctrine:database:create -n --if-not-exists

# DB MIGRATIONS

php bin/console doctrine:migrations:diff -n
php bin/console doctrine:migrations:run -n

# RUN APACHE

apache2-foreground