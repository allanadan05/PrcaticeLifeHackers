# PrcaticeLifeHackers

# Setup the cloned project in your local machine



## Install composer dependencies

* composer install

## Install npm dependencies

* npm install

## Create a copy of .env file

* cp .env.example .env

## Generate the app encryption key

* php artisan key:generate

## Create an empty database

* using xampp

## Edit .env file

In the .env file fill in the:

* DB_HOST
* DB_PORT
* DB_DATABASE
* DB_USERNAME
* DB_PASSWORD

to match the credentials of the database you just created

## Migrate the database

* php artisan migrate

# Then good to go 

* run php artisan serve

# for more info about setting up a laravel project see this documentation https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/