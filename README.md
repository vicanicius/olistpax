## Run in Docker:

Up All images:
```
./vendor/bin/sail up -d

```

After run in container:
> chmod -Rv 777 *

## Migration and Seeders

 php artisan migrate:refresh --seed


## Unit tests

In container execute:

php artisan test