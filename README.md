<table>
<tr>
<td align="center">
    <a href="https://laravel.com">
        <img
            src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
            width="280"
            alt="Laravel"
        >
    </a>
</td>

<td align="center">
    <a href="https://tailwindcss.com">
        <img
            src="https://raw.githubusercontent.com/tailwindlabs/tailwindcss/HEAD/.github/logo-light.svg"
            width="220"
            alt="Tailwind CSS"
        >
    </a>
</td>

<td align="center">
    <a href="https://www.mysql.com">
        <img
            src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg"
            width="180"
            alt="MySQL"
        >
    </a>
</td>
</tr>
</table>

# E-Commerce System

A full-stack e-commerce management system built with **Laravel 13**, **Blade**, **Tailwind CSS**, and **MySQL**.

The system provides two main interfaces:

* **Admin Panel** — Manage products, inventory, purchases, orders, customers, users, and other business operations.
* **Client Website** — Allow customers to browse products, manage their cart, place orders, and track their purchases.

## Tech Stack

* Laravel 13
* PHP
* MySQL
* Blade
* Tailwind CSS
* Vite
* Eloquent ORM

## Features

### Admin Panel

* Dashboard
* User management
* Role management
* Category management
* Product management
* Product image management
* Supplier management
* Purchase management
* Inventory management
* Customer management
* Order management
* Payment management
* Reports

### Client Website

* Product browsing
* Product search and filtering
* Product details
* Shopping cart
* Checkout
* Customer authentication
* Customer profile
* Order history
* Order tracking

## Requirements

Before installing the project, make sure you have:

* PHP 8.4+
* Composer
* Node.js
* npm
* MySQL

## Installation

Clone the repository:

```bash
git clone <repository-url>

cd ecommerce
```

Install PHP dependencies:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database connection in `.env`.

Run the database migrations:

```bash
php artisan migrate
```

Create the storage symbolic link for uploaded files:

```bash
php artisan storage:link
```

## Development

Start the Laravel development server:

```bash
php artisan serve
```

In another terminal, start Vite:

```bash
npm run dev
```

The application will be available at:

```text
http://127.0.0.1:8000
```

## Database

The project uses **MySQL** as the primary database and **Eloquent ORM** for database interaction.

Database configuration is stored in the `.env` file.

## Project Structure

```text
ecommerce/
├── app/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env.example
├── composer.json
├── package.json
└── vite.config.js
```

## License

This project is developed for educational purposes.
