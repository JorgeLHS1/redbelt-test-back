# RedBelt Security Test

**Web app with CRUD developed using Laravel and Materialize frameworks**

## Quick Setup

To correctly run this web application you'll need PHP >= 7.3 with some extensions for more details access [this link](https://laravel.com/docs/8.x/deployment#server-requirements) as well as MySQL >= 5.7 for more details access [this link](https://laravel.com/docs/8.x/database#introduction), [composer](https://getcomposer.org/) and [npm](https://www.npmjs.com/).

With these running correctly you'll need to create a database in MySQL, after creating a database for the project copy/rename the file `.env.example` to `.env` and setup the environment variables.

After setting up the environment variables save the file and run these commands in the project root folder.

    composer install
    npm run dev
    php artisan key:generate
    php artisan migrate
and we're all good to go, run the command below

    php artisan serve
The server will start running in http://localhost:8000
and enjoy the functionalities.
