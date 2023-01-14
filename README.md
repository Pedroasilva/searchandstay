<h1 align="center">Book Store API</h1>

<br>

## 🛠️ Instalation Guide

Install apache2

Install laravel dependencies:
```sh
php8.1 libapache2-mod-php8.1 php8.1-curl php-pear php8.1-gd php8.1-dev php8.1-mysql php8.1-xml php8.1-cli php8.1-common php8.1-json php8.1-opcache php8.1-mbstring php8.1-mcrypt php8.1-zip php8.1-fpm
```

Clone the repository

```sh
git clone https://github.com/Pedroasilva/searchandstay.git
```

Access the folder

```sh
cd searchandstay
```

Create the file `.env`

```sh
cp .env.example.env
```
Edite the file `.env` as below:

| Key             	| Value                                                                       	                                                                                                  |
|-----------------	|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `DB_DATABASE`         | Database name                                         	                                                                                                  |
| `DB_USERNAME`         | Database user                                                               |
| `DB_PASSWORD` 	| Database password             	                                                                                                  |

Install the dependencies:

```sh
composer install
```

Generate laravel's key 

```sh
php artisan key:generate
```

Migrate the database tables and add default values:

```sh
php artisan migrate --seed
```

Start de application

```sh
php artisan serve
```

Ready! The API run in `http://127.0.0.1:8000/api`