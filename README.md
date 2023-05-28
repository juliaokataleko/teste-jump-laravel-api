# Service Orders API

![alt text](https://github.com/juliaokataleko/teste-jump-laravel-api/blob/[master]/public/home.png?raw=true)

### Requirements
OS: Mac Os, Linux or Windows with (wsl) <br/>
Docker installed in your machine

### Installation
 - Clone the repository: 
 ```bash
 git clone https://github.com/juliaokataleko/teste-jump-laravel-api
 ```
 - Go into cloned folder: cd /folder-name

 - Open the terminal and run the following command to install dependencies:

 ** with docker running **

 ```bash
  docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Run the command:
```bash
  vendor/bin/sail up -d
```

Generate your application key
```bash
  vendor/bin/sail php artisan key:generate
```

Run migrations and seeder
```bash
  vendor/bin/sail php artisan migrate --seed
```


### The application is read to run!

Acess: http://localhost/