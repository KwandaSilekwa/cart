Cart Manager

# Installation

You can also download and run this app locally.

1) Clone the repo:
```
git clone https://github.com/kwanda9700/cart.git Cart
```

2) Create `.env` file from the example file:
```
composer run-script post-root-package-install
```

3) Setup .env variables

4) Update Composer
``` 
composer update
```

5) Run the post create project script
```
composer run-script post-create-project-cmd
```

6) Create a storage link
```
php artisan storage:link
```

7) Migrate and Seed to the data
```
php artisan migrate --seed
```

8) Serve the project
```
php artisan serve
```

9) then visit http://127.0.0.1:8000/login

Done.
