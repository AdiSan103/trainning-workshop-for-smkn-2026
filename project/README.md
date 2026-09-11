# Bimbingan SMK 1 Tabanan

Web application for SMK 1 Tabanan guidance activities.

## Technology

- **Laravel:** 8.75
- **PHP:** minimum 7.3; PHP 8.2 recommended
- **Frontend:** HTML, CSS, Blade templates
- **Database:** MySQL
- **Build tools:** Composer, Node.js, npm, Laravel Mix
- **Local server:** XAMPP 8.2.x (Apache, MySQL, PHP 8.2.x)

## Requirements

Install these before running the project:

1. XAMPP 8.2.x or newer with Apache and MySQL.
2. PHP 7.3 or newer. PHP 8.2.x recommended.
3. Composer 2.x.
4. Node.js 14.x or newer with npm.
5. Git, optional.

> Project requires Laravel 8 and PHP `^7.3|^8.0`, as defined in `composer.json`.

## Installation

Open Command Prompt or PowerShell in project directory:

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
```

Create MySQL database named `laravel` in phpMyAdmin. Default connection in `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Run database migrations when project database tables are required:

```bash
php artisan migrate
```

## Run Project

1. Start **Apache** and **MySQL** from XAMPP Control Panel.
2. Build frontend assets:

```bash
npm run dev
```

3. Start Laravel development server:

```bash
php artisan serve
```

4. Open <http://127.0.0.1:8000>.

For production assets:

```bash
npm run production
```

## Useful Commands

```bash
php artisan route:list
php artisan migrate:fresh
php artisan optimize:clear
```
