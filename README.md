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
- `TagFactory` – generation of tag
- `CharacterFactory` – generation of character
- `StoryFactory` – generation of story

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

##### Usage of CharacterFactory:

```php
// Randomly generates character with fandom_id or with null (60% id, 40% null)
Character::factory()->create(); 

// Generates character random with fandom_id
Character::factory()->withFandom()->create(); 

// Generates character without fandom_id
Character::factory()->withoutFandom()->create(); 

// Generate 5 characters with fandom and 5 without one
Character::factory()->count(5)->withFandom()->create();
Character::factory()->count(5)->withoutFandom()->create();
```

## Start

Run
```bash
php artisan serve
npm run dev
```

## Static code analysis
The project uses laravel/pint to format code and larastan to find static errors in code

### Pint

To run pint use this commands:

- Check and fix all files:
```bash
./vendor/bin/pint
```

- Check and fix specific file:
```bash
./vendor/bin/pint App\models\User.php
```

### Larastan

Start analyzing use command:

```bash
./vendor/bin/phpstan analyse
```

If you are getting the error `Allowed memory size exhausted`, then you can use
the `--memory-limit` option fix the problem:

```bash
./vendor/bin/phpstan analyse --memory-limit=2G
```
