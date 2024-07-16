## Requisitos

* PHP 8.2 ou superior
* MySQL 8 ou superior
* Composer

## Como rodar o projeto baixado

Duplicar o arquivo .env.exemple e renomear para .env<br>
Alterar no arquivo ,env as credenciais do banco de dados<br>

Instalar as dependências do PHP

composer install

Gerar a chave no arquivo .env

php artisan Key:generate

Executar  as migration

php artisan migrate

Executar as seed

php artisan db:seed

Iniciar o projeto criado com laravel

php artisan serve

Para acessar a API, é recomendado utilizar o Insomnia para simular requisições à API.

http://127.0.0.1:8000/api/users

criar seed

php artisan make:seeder NomeDaSeeder
php artisan make:seeder UserSeeder

Executar as seed

php artisan db:seed

## Sequência para criar o projeto
Criar o projeto com laravel

composer create-project laravel/laravel .

Alterar no arquivo .env as credenciais do banco de dados<br>

Criar o arquivo de rotas para API

php artisan install:api
