

## Installation

First at all update through Composer.

```
$ composer update
```

and then move into the folder and generate .env configuration file

```
$ copy /y .env.example .env
```

Finally, generate a new application key

```
$ php artisan key:generate
```
