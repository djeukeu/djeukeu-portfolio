## Requirements

- Get the .env file for the project
- Install Docker and run docker
- Install the correct php and composer version for the project

## GuideLine

- Install packages, using: `composer install`
- Start up the database in the docker container, using: `docker-compose up`
- Run the db migration, using: `php artisan migrate`
- Run the project, using: `php artisan serve`

## Commands

- `To know the version of composer to use in the project use` php artisan --version 
- `To test linting:` composer pint-test
- `To test and fix automaticaly linting errors:` composer pint

- `NB: You need to use 'sudo' infront of every docker command if you are using Ubuntu or UNIX Destributions`
