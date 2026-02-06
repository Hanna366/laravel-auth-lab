# Laravel Authentication Laboratory Assignment

## Project Overview
This Laravel web application implements user authentication and a dashboard page using Laravel Breeze authentication scaffolding.

## Features Implemented
- ✅ User registration and login system
- ✅ Database migrations with proper schema
- ✅ User factories and seeders (100+ users)
- ✅ Protected dashboard route
- ✅ Bootstrap frontend with responsive design
- ✅ Proper authentication redirects

## Database Schema
The users table includes:
- `id` (primary key)
- `username` (string, unique)
- `name` (string)
- `email` (string, unique)
- `password` (string)
- `is_active` (boolean, default: true)
- `last_login` (timestamp, nullable)
- `created_at` and `updated_at` (timestamps)

## Setup Instructions

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or SQLite database

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone [your-repository-url]
   cd laravel-auth-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure database**
   - Update `.env` file with your database credentials
   - For SQLite, set: `DB_CONNECTION=sqlite`

7. **Run migrations**
   ```bash
   php artisan migrate
   ```

8. **Seed the database**
   ```bash
   php artisan db:seed
   ```

9. **Compile frontend assets**
   ```bash
   npm run dev
   ```

10. **Start the development server**
    ```bash
    php artisan serve
    ```

## Sample Login Credentials
After seeding, you can log in with any of the generated users. Sample credentials:
- **Username**: Any seeded username
- **Email**: Any seeded email address
- **Password**: `password` (default for all seeded users)

## Routes
- `/` - Welcome page
- `/login` - User login
- `/register` - User registration
- `/dashboard` - Protected dashboard (requires authentication)
- `/logout` - Logout route

## Technologies Used
- **Laravel 10.x**
- **Laravel Breeze** (Authentication scaffolding)
- **Bootstrap 5** (Frontend framework)
- **Vite** (Asset compilation)
- **MySQL/SQLite** (Database)

## Submission Requirements Met
✅ Database migration with complete schema
✅ User factories and seeders (100+ records)
✅ Laravel Breeze authentication system
✅ Protected routing and redirects
✅ Dashboard with Bootstrap template
✅ Clean, well-organized code

## Author
[Your Name]
[Your Student ID]
[Course Name]