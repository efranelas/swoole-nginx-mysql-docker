# swoole-nginx-mysql-docker

Run Swoole applications in containers that uses NGINX as a reverse proxy and MySQL as the database service for the application.

## First step

The first step after cloning this repo is to create your own `.env` file. You may want to use the command `cp .env{.example,}` for this purpose. After that, run the containers using `docker-compose up -d`.

Attention: This process may take some minutes in the first boot. 

## What are all these folders used for?

In the directories `nginx/` and `php/` lie files related to the configuration of the nginx and php services, respectively.

The directory `mysql/` is automatically created to persist data from the database service running on container mysql.

The directory `static/` has two subfolders: in the `html/` one lies the static files usually served by nginx; in the `static/` lies the files uploaded through php/swoole service container.

Finally, in the `src/` directory lies the source-code of your Swoole application.

Note that the `src/public/` folder is publicly accessible for the web.

--

Sirva apps Swoole em containers que usam nginx como proxy reverso e o serviço de banco de dados mysql.

## Como usar

Após clonar ou baixar este repositório, copie o arquivo de exemplo `cp .env{.example,}` e edite conforme desejado. Após isso, inicie os containers usando `docker-compose up -d`.

Obs.: Este processo pode ser demorado na primeira inicialização.

## O que são todas essas pastas?

Nos diretórios `nginx/` e `php/` jazem os arquivos relacionados à configuração dos serviços nginx e php, respectivamente.

O diretório `mysql/` é criado automaticamente para persistir os dados do serviço de banco de dados do container mysql.

No diretório `static/` jazem duas subpastas: a `html/`, onde ficam arquivos estáticos que geralmente são usados pelo container nginx; e `static/`, onde residem arquivos enviados por meio de upload através do container php.

E por fim, o diretório `src/` é onde jaz o código-fonte da sua aplicação Swoole.

Note que o diretório `src/public/` é publicamente acessível através da web.
