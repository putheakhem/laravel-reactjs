#ManageTask 

A simple laravel application used for managing tasks inside projects. 

## Getting Started

Clone the project repository 

```bash
git clone git@github.com:putheakhem/laravel-reactjs.git ~/managetask
```

After cloning, Navigate into your project folder and  run:

```bash
composer install
```

```bash
npm install
```


```bash
npm run watch
```

Duplicate `.env.example` and rename it `.env`

Then run:

```bash
php artisan key:generate
```

### Prerequisites

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

And finally, start the local development server:

```bash
php artisan serve
```

and visit [http://localhost:8000](http://localhost:8000) to see the application in action.

## Built With

* [Laravel](https://laravel.com) - The PHP Framework For Web Artisans
* [React](https://reactjs.org) - A JavaScript library for building user interfaces
