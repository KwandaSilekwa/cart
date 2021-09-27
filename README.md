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

4) Run following commands:
```
composer update
composer run-script post-create-project-cmd
php artisan storage:link
php artisan migrate --seed
```
5) php artisan serve

6) then visit http://127.0.0.1:8000/login
```
Done.
