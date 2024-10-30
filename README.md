# To-Do Application

A robust To-Do Application utilizing Vue 3 for the frontend and Laravel 11 for the backend, designed for efficient task management and real-time updates.

## Frontend (Vue 3)

### Features

- Intuitive task management interface
- Real-time updates via WebSockets
- Responsive design
- User authentication and authorization
- Task filtering (All, Completed, Pending)

### Technologies

- Vue 3
- Axios for HTTP requests
- Vuex for state management
- WebSockets
- CSS-in-JS with styled-components

### Installation

1. Install Node.js and npm
2. Navigate to the frontend: `cd todo-frontend`
3. Install dependencies: `npm install`
4. Launch server: `npm run serve`

## Backend (Laravel 11)

### Features

- User authentication and authorization
- CRUD operations for tasks
- Task categorization and filtering
- User profile management
- Real-time updates via WebSockets# Installation and Database Setup

### Installation and Database Setup

1. Install PHP, Composer, and MySQL, ensuring MySQL is running.
2. Change directory to the backend folder: `cd todo-backend`
3. Install dependencies and set up the environment variables: `composer install && cp .env.example .env`
4. Generate an application key and update the `.env` file with your MySQL database credentials.
5. Run migrations to set up the database schema: `php artisan key:generate && php artisan migrate`
6. Start the server: `php artisan serve`

### Technologies

- Laravel 11
- MySQL
- Redis for caching and sessions
- PHP 8.x

### API Endpoints

| Method | Endpoint     | Description            |
|--------|--------------|------------------------|
| GET    | `/tasks`     | Retrieve all tasks     |
| POST   | `/tasks`     | Create a new task      |
| GET    | `/tasks/{id}`| Retrieve a specific task|
| PUT    | `/tasks/{id}`| Update a specific task |
| DELETE | `/tasks/{id}`| Delete a specific task |

### Conclusion

This application serves as a comprehensive example of integrating Vue and Laravel, with potential for further enhancements like advanced task filtering and prioritization.