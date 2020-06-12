# Phel Lumen Demo

Demonstrates how to get Lumen working with Phel.

> I've managed to get it to return blade views, create log files, render exceptions...

## Quickstart

```
composer install
cp .env.example .env
php -S localhost:8000 ./src/index.php
```

Navigate to `http://localhost/` to see the home page.

**Important** Remember to change `home-dir` variable in `src/boot.phel` to the location of the repository on your drive.

## Pain points

So, the pain points are/were:

- somewhere a Closure is expected, but Phel returns an anonymous class with __invoke
- `php/__DIR__` does not return the correct path
- `{:key "value"}` returns an object (Table class) when it would be handy that it returns an array. Or that there is a method which converts it to array on demand. For now there is a workaround `(let [arr (php/array)] (php/aset arr "namespace" "\App\Http\Controllers") (print arr))`.