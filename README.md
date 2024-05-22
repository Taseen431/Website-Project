

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

#### Prerequisites

-   Composer dependency manager
-   PHP 8+
-   Laravel 10.18+
-   Livewire 3

#### Installation

1-  Install the dependencies

```
composer install
```

2- Configure the environment:

```
cp .env.example .env
```

3- Generate the application key:

```
php artisan key:generate
```

4- Migrate the database:

```
php artisan migrate --seed
```

5- Start the development server:

```
php artisan serve
```

## Running Tests

To run tests, run the following command

```
  php artisan test
```

