#!/bin/bash

if [ ! -f composer.json ]; then
    echo "Please make sure to run this script from the root directory of this repo."
    exit 1
fi

fancy_echo () {
    echo -e "\n------------------------------"
    echo "$1"
    echo -e "------------------------------\n"
}

fancy_echo "Hello $USER, Welcome to Laraboi 🤙"
fancy_echo "Let's set em up! 🔥🚀"

echo "What is the app name?"
    read app_name

fancy_echo "Setting up database 🤙"

echo "What is the database connection you will be using? (default: MySql)"
    read db_connection

echo "What is the database host you will be using? (default 127.0.0.1)"
    read db_host

echo "What is the database port you will be using? (default 3306)"
    read db_port

echo "What is the name of the database you will be using?"
    read  db_name

if [ $db_connection = 'sqlite' ]; then
    fancy_echo "Do you want to create sqlite file in database/ folder? (Y or N)"
        read create_sqlite

    if [ "$create_sqlite" = "Y" ]; then
        `touch database/$db_name`
        fancy_echo "Database created"
    fi
fi

echo "What database user will you be using?:"
    read db_user

echo "What is the password for this user? Leave an empty string if blank:"
    read db_pass


fancy_echo "Setting up env 🔥"

cp .env.example .env
composer install
php artisan key:generate

php artisan env:set APP_NAME $app_name
php artisan env:set DB_DATABASE $db_name
if [ $db_connection ]; then
    php artisan env:set DB_CONNECTION $db_connection
fi
if [ $db_host ]; then
    php artisan env:set DB_HOST $db_host
fi
if [ $db_port ]; then
    php artisan env:set DB_PORT $db_port
fi
php artisan env:set DB_USERNAME $db_user
if [ $db_pass ]; then
    php artisan env:set DB_PASSWORD $db_pass
fi

fancy_echo "Would you like to run migration? (Y or N)"
read x
if [ "$x" = "Y" ]; then
    php artisan migrate --seed
    php artisan passport:install
fi


# Install and compile the frontend code
# -----------------------------------------------------------------------------
fancy_echo "Would you like to setting up frontend🔥? (Y or N)"
read x
if [ "$x" = "Y" ]; then
    npm install
    npm run dev
fi


# Run Tests To ensure all is working
# -----------------------------------------------------------------------------
fancy_echo "Testing up! 🔥"

vendor/bin/phpunit


fancy_echo "Happy coding - with ❤️  @nicoaudy"