# Ideas - Social Platform for Sharing Ideas

Ideas is a Laravel-based social platform where users can share their ideas, interact with others' content, and build a network of connections.

## Features

- **User Authentication**: Register, login, and manage your profile
- **Ideas Sharing**: Create, edit, and delete your ideas
- **Social Interaction**: Comment on ideas, follow other users
- **User Profiles**: Customize your profile with bio and profile image
- **Search Functionality**: Find ideas based on content

## Tech Stack

- **Backend**: Laravel PHP Framework
- **Frontend**: Bootstrap with Sketchy theme
- **Database**: SQLite (default configuration)
- **Icons**: Font Awesome

## Installation

1. Clone the repository
   ```
   git clone https://github.com/yourusername/ideas.git
   cd ideas
   ```

2. Install dependencies
   ```
   composer install
   npm install
   ```

3. Set up environment
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up database
   ```
   touch database/database.sqlite
   php artisan migrate
   ```

5. Link storage for profile images
   ```
   php artisan storage:link
   ```

6. Run the application
   ```
   php artisan serve
   ```

## Usage

- Register a new account or login
- Create ideas from the dashboard
- View other users' ideas
- Follow interesting users
- Comment on ideas you find interesting
- Edit your profile with a bio and profile picture

## Database Structure

- **users**: User accounts and profile information
- **ideas**: User-created posts/ideas
- **comments**: Comments on ideas
- **follower_user**: Tracks user following relationships

## Screenshots

[Add screenshots of your application here]

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
