## Requirements

- Get the .env file for the project
- PHP version of 8.1 or higher.
- An Apache server
- Install Docker and run docker
- Composer as a package manager to manage dependencies

## GuideLine

- Install packages, using: `composer install`
- Start up the database in the docker container, using: `docker-compose up`
- Run the db migration, using: `php artisan migrate`
- Run the project, using: `php artisan serve`

## Commands

- Inspect code for style errors: `composer pint`
- Inspect and fix code style errors: `composer pint-fix`

