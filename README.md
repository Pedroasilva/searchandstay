<h1 align="center">Backend</h1>

<br>

## 🛠️ Guia de instalação 

Instale o apache2

Instale as dependências do Laravel:
```sh
php8.1 libapache2-mod-php8.1 php8.1-curl php-pear php8.1-gd php8.1-dev php8.1-mysql php8.1-xml php8.1-cli php8.1-common php8.1-json php8.1-opcache php8.1-mbstring php8.1-mcrypt php8.1-zip php8.1-fpm
```

Clone o repositório

```sh
git clone https://github.com/Pedroasilva/searchandstay.git
```

Acesse o repositório clonado

```sh
cd searchandstay
```

Crie o arquivo `.env`

```sh
cp .env.example.env
```
Edite o arquivo `.env` conforme descrito abaixo.

| Chave             	| Valor                                                                       	                                                                                                  |
|-----------------	|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `DB_DATABASE`         | Nome do banco de dados criado                                         	                                                                                                  |
| `DB_USERNAME`         | Usuário com privilégios no banco de dados                                                               |
| `DB_PASSWORD` 	| Senha do usuário do banco de dados             	                                                                                                  |

Outras chaves podem ser alteradas, entretanto estas são as necessárias para o funcionamento do projeto em seu ambiente de desenvolvimento.

Instale as dependências

```sh
composer install
```

Gere as chaves do Laravel

```sh
php artisan key:generate
```

Migre as tabelas do banco de dados, adicionando valores padrão

```sh
php artisan migrate --seed
```

Inicie o servidor

```sh
php artisan serve
```

Pronto! A api roda em `http://127.0.0.1:8000/api`