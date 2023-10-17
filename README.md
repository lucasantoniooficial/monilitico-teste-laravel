### Teste Monolitico Laravel

## Instalação

### Requisitos
#### Docker
#### Wamp, Xampp, Mamp ou Docker
#### Composer
#### Banco de dados Postgres

### Processo de inicialização docker

#### 1. Clone o repositório
```bash
git clone git@github.com:lucasantoniooficial/monilitico-teste-laravel.git
```

#### 2. Entre na pasta do projeto
```bash
cd monilitico-teste-laravel
```

#### 3. Copie o arquivo .env.example para .env
```bash
cp .env.example .env
```

#### 4. Execute o comando docker
```bash
docker compose up -d ou docker-compose up -d
```

#### 5. Execute o comando para ver o container id e entre no container
```bash
docker ps
docker exec -it <container_id> bash
```

#### 6. Execute o comando para instalar as dependências do projeto
```bash
composer install
```

#### 7. Execute o comando para gerar a chave do projeto
```bash
php artisan key:generate
```

#### 8. Execute o comando para criar as tabelas no banco de dados e popular a tabela usando as factories
```bash
php artisan migrate --seed
```

#### 9. Dados para login
```bash
E-mail: user@email.com
Senha: 123
```

##### OBS: Caso não use docker só pular o passo: 4 e 5
