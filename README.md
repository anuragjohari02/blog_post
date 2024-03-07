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
