# Teste SimplesHotel

Teste em Laravel. 

```bash
php: 7.3.3
node: 16.17.0
laravel: 8
```
## Iniciando

Clone o projeto, usando o comando abaixo (usando https):

```bash
git clone https://github.com/RuanSilva6721/simpleshotel_teste.git
```

Depois de clonar, acesse o repositório e instale as dependências com os comandos abaixo (para isso, utilize o [composer](https://getcomposer.org/)):

```bash
cd supera_teste
composer install
```

Após instalar as dependências, duplique o arquivo `.env.example` e renomei um deles para `.env`.

Gere uma nova chave da aplicação:

```bash
php artisan key:generate
```

Altere as configurações no arquivo `.env` para que o projeto se conecte ao banco de dados.

Execute o comando abaixo para que as tabelas sejam criadas no banco de dados:

```bash
php artisan migrate
```


Inicie o servidor da aplicação com o comando:

```bash
php artisan serve
```
Para ver o projeto em execução acesse seu [http://localhost:8000](http://localhost:8000)



**Caso queira rodar em docker , utilize o comando:**


##baixe o laradock no projeto usando o comando
```bash
git clone https://github.com/Laradock/laradock.git
```

##Inicie o docker em sua máquina e depois:
```bash
cd laradock
docker-compose up -d nginx mysql phpmyadmin
```
##
Para ver o projeto em execução acesse seu [http://localhost:8088](http://localhost:8088)

para acessar o phpmyadmin [http://localhost:1010](http://localhost:1010)
#acessar ao phpmyadmin
Sever: mysql
Username: root
Password: root

Você deve mudar a conexão do banco no `.env` para

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=supera
DB_USERNAME=root
DB_PASSWORD=root

Você deve acessar o workspace com o comando:

```bash
docker-compose exec --user=laradock workspace bash
```
Execute o comando abaixo para que as tabelas sejam criadas no banco de dados:
```bash
php artisan migrate
```

Caso queira dados fictícios para o seu usuário no banco:
```bash
php artisan db:seed
```
Caso queria fazer o testes unitários:



**Faça alteração da variavel `APP_URL=http://localhost` para `APP_URL=http://localhost:8000` no `.env`**


**Precisar ter a versão do Chrome => 109 e precisar ter iniciado o servidor da aplicação com ``bash
php artisan serve
``**


```bash
php artisan test e php artisan dusk
```

Caso não funcione instale os pacotes antes:


```bash
composer require --dev laravel/dusk e php artisan dusk:install
```


## Construído com

* [Laravel](https://laravel.com/)

