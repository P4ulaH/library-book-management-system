
# Library Book Management System

A modern Laravel web application for managing a library's books, authors, and genres. This project provides a clean, responsive interface for CRUD operations, user authentication, and demonstration data.

## Features

- User registration and login (username & password)
- Add, edit, and delete books, authors, and genres
- View detailed information for each book, author, and genre
- Paginated lists for books, authors, and genres
- Responsive sidebar navigation
- Success pop-up messages for actions
- Demo data via database seeders

## Getting Started

### 1. Clone the Repository

```
git clone https://github.com/P4ulaH/library-book-management-system.git
cd library-book-management-system
```

### 2. Install Dependencies

```
composer install
npm install
```

### 3. Environment Setup

Copy the example environment file and generate an app key:

```
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database

Edit your `.env` file and set your database connection details:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database in your database server if it does not exist.

### 5. Run Migrations and Seeders

If you want to see how the application looks like with sample data run:

```
php artisan migrate --seed
```

This will create all tables and populate them with demonstration data

### 6. Build Frontend Assets

```
npm run build
```

### 7. Start the Development Server

```
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Register a new user or log in with an existing account.
- Use the sidebar to navigate between books, authors, and genres.
- Add, edit, or delete records as needed.
- Success messages will appear after actions.

## Customization

- To change or add seed data, edit the files in `database/seeders/` and run `php artisan db:seed`.
- To reset the database and reseed, run:
	```
	php artisan migrate:fresh --seed
	```



## License

This project is open-source and available under the MIT License.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
