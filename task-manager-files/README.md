# Task Manager — setup

These are the *application* files only (Model, Controller, migration, routes, views). Laravel's actual framework code (`vendor/`) has to come from Composer, which needs your own internet connection — that part can't be pre-built for you.

Run these commands in order, on your own machine:

```bash
# 1. Create a fresh Laravel install (pulls the framework)
composer create-project laravel/laravel task-manager
cd task-manager

# 2. Unzip this folder's contents INTO task-manager, overwriting when asked
#    (drag the contents of this folder into task-manager, replacing routes/web.php)

# 3. Use SQLite — no database server needed
touch database/database.sqlite

# 4. Open .env and change this line:
#    DB_CONNECTION=sqlite
#    (you can delete the DB_HOST / DB_PORT / DB_DATABASE / DB_USERNAME / DB_PASSWORD lines below it)

# 5. Create the tasks table
php artisan migrate

# 6. Run it
php artisan serve
```

Visit **http://localhost:8000** — full create / list / view / edit / delete should work immediately.

If `php` or `composer` aren't installed yet, tell Claude your OS and it'll give install steps.
