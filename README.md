# Nudge

A simple, clean task manager built with Laravel — created as a hands-on way to learn Laravel's core architecture (MVC, routing, Eloquent ORM) through a real, working CRUD app.

## What it does

Nudge lets you create, view, edit, and delete tasks — each with a title, description, status, and due date. Full CRUD, nothing more, nothing less.

- Create a task
- View all tasks in one list
- Edit a task
- Delete a task
- Status tracking — pending, in progress, completed

## Tech stack

- **Laravel** — MVC framework, routing, Eloquent ORM
- **SQLite** — lightweight file-based database, zero server setup
- **Blade** — Laravel's templating engine
- **Tailwind CSS** — utility-first styling (via CDN)

## Why it's built this way

| Concept | Where it shows up |
|---|---|
| **MVC** | `Task` (Model) ↔ `TaskController` (Controller) ↔ Blade views (View) |
| **Routing** | A single `Route::resource('tasks', TaskController::class)` line generates all 7 CRUD routes |
| **Eloquent ORM** | `Task::create()`, `Task::latest()->get()`, `$task->update()`, `$task->delete()` — no raw SQL anywhere |
| **Route-model binding** | Controller methods take `Task $task` directly — Laravel resolves it from the URL automatically |
| **Validation** | `$request->validate()` in `store()` and `update()`, with errors surfaced back to the form |

## Routes

| Verb | URI | Action | Purpose |
|---|---|---|---|
| GET | `/tasks` | index | List all tasks |
| GET | `/tasks/create` | create | Show the new-task form |
| POST | `/tasks` | store | Save a new task |
| GET | `/tasks/{task}` | show | View a single task |
| GET | `/tasks/{task}/edit` | edit | Show the edit form |
| PUT/PATCH | `/tasks/{task}` | update | Save changes |
| DELETE | `/tasks/{task}` | destroy | Delete a task |

## Getting started

```bash
git clone https://github.com/himasree-d/nudge-task-manager
cd task-manager

composer install

cp .env.example .env
php artisan key:generate

touch database/database.sqlite
# in .env, set: DB_CONNECTION=sqlite

php artisan migrate
php artisan serve
```

Visit **http://localhost:8000** — you're up and running.

## Project structure

```
app/
  Models/Task.php               → Eloquent model
  Http/Controllers/TaskController.php → CRUD logic
database/
  migrations/..._create_tasks_table.php → schema
routes/
  web.php                        → route definitions
resources/views/
  layouts/app.blade.php          → shared layout
  tasks/                         → index, create, edit, show, _form
```

## License

Built as a learning project — free to use or adapt.
