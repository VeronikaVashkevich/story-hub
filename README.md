# An application where you can write your own stories (fanfiction) and read the stories of other users.

## Installation

Copy `.env.example` into `.env` file and setup required parameters in it

Run 
```bash
composer install
npm install
php artisan key:generate
php artisan migrate
```

## Database Factories

The project uses Laravel factories to generate test data.  
The factories are located in `database/factories/`.

### Available factories:
- `UserFactory` – user generation
- `FandomFactory` – generation of fandom

### Launching factories

#### Via Laravel Tinker

```bash
php artisan tinker
```

Examples:

```php
use App\Models\Fandom
Fandom::factory()->count(5)->create();
```

## Start

Run
```bash
php artisan serve
npm run dev
```
