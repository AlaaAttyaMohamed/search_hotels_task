# Search Hotels Task

It is a Laravel 5.2 web application contains only one endpoint Api named `search_hotels` using PHP >= 7.1


# Installation Steps

- clone the project to your machine
- run `php -r \"copy('.env.example', '.env');\"`
- run `composer install`
- run `php artisan key:generate`


# Test The Api

- run `php artisan serve`
- test the api by using postman for example and go to this link `http://localhost:8000/api/v1/search_hotels?price_from=100&price_to=200`

- you can search by name , city , price , and date

- find our Test at tests/ExampleTest.php

# To-do

- Implement `travis` or `scrutinizer-ci` or any other CI tool for the project, Add the build status badges to our project README file

- Use `codeclimate` or any other alternative to estimate the code quality and add it's badge to our project README file
