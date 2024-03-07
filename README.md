# Blog Post CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application for managing blog posts. It includes both a backend API built with Laravel and a frontend interface for interacting with the API.

## Backend Requirements

1. **Laravel PHP Framework**: The backend API is built using Laravel (version 10.x or later).
2. **Database Schema**: The application utilizes a MySQL database with a schema that includes the following fields for blog posts:
    - Title (string)
    - Content (text)
    - Author (string)
    - Publication Date (date)
3. **API Routes and Controllers**: Laravel's routing system is used to define API routes and controllers for handling CRUD operations on blog posts.
4. **Form Validation**: Laravel's built-in form validation is employed to validate input fields before processing.
5. **Error Handling**: The application implements appropriate error handling and response codes for different scenarios, such as validation errors and resource not found errors.
6. **Pagination**: Pagination is implemented for the list of blog posts endpoint to improve performance.

## Frontend Interface

The frontend interface allows users to perform the following actions:

-   View a list of blog posts
-   View the details of a specific blog post
-   Create a new blog post
-   Update an existing blog post
-   Delete a blog post

## Installation

1. Clone the repository: git clone <repository-url>.

2. Navigate to the project directory: cd filename.

3. Install Composer dependencies: composer install.

4. Set up the environment configuration by copying the `.env.example` file to `.env` and configuring the database connection details.

5. Run database migrations to create the necessary tables: php artisan migrate.

6. Serve the application: php artisan serve.

7. Access the application in your web browser at `http://localhost:8000`.

## API Documentation

The API endpoints are documented below:

-   **GET /api/posts**: Retrieve a list of all blog posts.
-   **GET /api/posts/{id}**: Retrieve the details of a specific blog post.
-   **POST /api/posts**: Create a new blog post.
-   **PUT /api/posts/{id}**: Update an existing blog post.
-   **DELETE /api/posts/{id}**: Delete a blog post.

## Technologies Used

-   Laravel PHP Framework
-   MySQL Database

## Contributors

-   [Anurag Kumar Johari](https://github.com/anuragjohari02)

<!-- Provided by Laravel -->

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
