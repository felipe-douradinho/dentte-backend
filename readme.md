
### API Dentte Backend
## Informações Preliminares

#### - Todo o código do projeto está no diretório `src/`
#### - O servidor web (`nginx`) utiliza a porta `4050`
#### - O servidor de banco (`mysql`) utiliza a porta `3309` (portanto, pode acessá-lo utilizando esta porta em sem SGBD)
#### - O `Xdebug` é escutado na porta `9009` (vide final deste leia-me)
#### - Caso utilize Windows, recomendamos o uso do `PowerShell` ou `Git Bash`
#### - As etapas abaixo serão necessárias somente na `primeira execução`
#### - Você precisará ter o `Docker` e o `Docker Compose` instalado (e iniciado)
#### - Este projeto já é considerado `Stateless`, ou seja, salva desde `sessions` a `cache` files, bem como `filas` (queue) no `redis` (já está configurado)
#### - Ao final deste leia-me, você será capaz de acessar o dominio `local` da seguinte maneira:

- http://local.api.12345678901234.dentte.com.br:4050

###

## Resumo (quick start)


```shell
cp .env.sample .env
```

```shell
cp src/.env.sample src/.env
```

```shell
sudo docker-compose up -d
```

```shell
docker exec -it php_dentte_backend php artisan jwt:secret
```

```shell
docker exec -it php_dentte_backend php artisan key:generate
```

- Reinicie para as mudanças do `.env` surtirem efeito.

```shell
sudo docker-compose down; sudo docker-compose up 
```

**_Importante1_**: Edite as variáveis de ambiente `.env` e `src/.env`

**_Importante2_**: Adicione as entradas em seu arquivo de hosts (**_item 6_** abaixo)

Pronto! Os endpoints estão no ar conforme as URLs acima. Para mais detalhes, leia o conteúdo completo deste LEIA-ME.

###

## 1 - Projeto

#### 1. Por favor, copie o arquivo `src/.env.sample` para `src/.env` 

```shell
cp src/.env.sample src/.env
```

###
#### 2. Efetue login no _Gitlab Registry_

Para efetuar login no Gitlab Registry, crie um `Access Token` <a hred="https://gitlab.com/-/profile/personal_access_tokens">clicando aqui</a>. Para isso, em `Select scopes`, marque `read_api` e`read_registry` e clique em `Create personal access token` e copie o  token gerado.

Em seguida, basta executar o seguinte (substitua `<username>` por seu login no gitlab e cole seu `<token>` quando solicitado pelo token recém criado).

```shell
docker login registry.gitlab.com -u <username-gitlab>
```

###
#### 3. Defina suas variáveis de ambiente dentro do novo arquivo `src/.env`

###
#### 4. Inicie o docker (vide mais em `2 - Docker Compose` logo mais abaixo desta seção)


###
#### 5. Gere o `secret do JWT` e o `APP_KEY` do Laravel, respectivamente

```shell
docker exec -it php_dentte_backend php artisan jwt:secret
```

```shell
docker exec -it php_dentte_backend php artisan key:generate
```

###
#### 6. Adicione as entradas em seu arquivo de hosts para cada FQDN local:

- Windows: `C:\Windows\System32\Drivers\etc\hosts`
- Unix: `/etc/hosts`

```shell
127.0.0.1   local.api.12345678901234.dentte.com.br
```

## 2 - Docker Compose

###### O projeto utiliza _Docker_ e _Docker Compose_ para tentar manter o ambiente de desenvolvimento (entre os devs) e produção iguais.

#### 1. Por favor, copie o arquivo `.env.sample` para `.env` (na raíz deste repositório)

```shell
cp .env.sample .env
```

###
#### 2. (OPCIONAL) Defina suas variáveis de ambiente dentro do novo arquivo `src/.env` (normalmente não necessita de alteração):

```shell
ENVIRONMENT=DEVELOP
XDEBUG_ENABLED=1

# windows / unix
OS_PLATFORM=unix
```

###
#### 3. Inicialize os containers:

```shell
sudo docker-compose up -d
```

Se tudo correu bem, agora você já pode acessar o dominio local:

- http://local.api.12345678901234.dentte.com.br:4050


###

## Composer 

Se no futuro você precisar instalar alguma dependência do _composer_, atualizar os autoloads, etc, basta escolher o container desejado e executar:

- Composer
```shell
docker exec -it php_dentte_backend composer install
ou
docker exec -it php_dentte_backend composer require NOME_DO_PACOTE
ou
docker exec -it php_dentte_backend composer dump-autoload
```

## NOTAS:

- As dependências do composer são instaladas automaticamente na primeira execução dos contêineres.
- Você deve **REINICIAR** todos os seus contêineres sempre que precisar atualizar as variáveis de ambiente em `src/.env` (usando `sudo docker-compose down && sudo docker-compose up -d`)


## Xdebug - Visual Studio Code

Para utilizar o Xdebug em seu Visual Studio, instale a <a href="https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug">extensão do XDEBUG</a> e utilize as configurações abaixo em seu `.vscode/launch.json`:


### `.vscode/launch.json`:

```shell
{
    "configurations": [{
            "name": "XDebug Dentte Backend",
            "type": "php",
            "request": "launch",
            "port": 9009,
            "log": true,
            "externalConsole": false,
            "pathMappings": {
                "/var/www/api.12345678901234.dentte.com.br/public": "${workspaceRoot}/src",
            },
            "ignore": [
                "**/vendor/**/*.php"
            ]
        },
    ]
}
```


## Redis - Playground

Comandos úteis:

- Acesse o container do redis e tenha disponível todos os binários à disposição:

```shell
sudo docker exec -it redis_dentte_backend sh
> redis-cli
> ping
```

- Monitore o `redis` em tempo real:

```shell
sudo docker exec -it redis_dentte_backend redis-cli monitor
```

## MySQL

- Os dados de acesso no ambiente de desenvolvimento do `MySQL` encontram-se no `./docker-compose.json`, mas é basicamente:

```shell
(...)
environment:
  ############################
  MYSQL_DATABASE: "dentte_main"
  MYSQL_USER: "dentte"
  MYSQL_PASSWORD: "dentte"
  MYSQL_ROOT_PASSWORD: "pJ4GXX&#7V*z@LLs"
  ############################
(...)
```

###
- Os containers docker recebem IPs aleatórios. Para descobrir o `HOST` de conexão com o MySQL (para utilizar Workbench ou phpMyAdmin, etc), basta inspecionar o container do MySQL e obter o seu IP. Após obter o IP, basta substituir o final do IP com `.1` (acessando, assim, o gateway da rede)

Exemplo:

```shell
> sudo docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' mysql_dentte_backend

> 172.21.0.6
```

Se comando acima resultou em `172.21.0.6`, o seu host de conexão com o MySQL será `172.21.0.1` usando a porta descrita no início deste leia-me.

###
- Se desejar `excluir` o banco de dados `dentte_main`, o caminho mais simples é derrubar o volume `volume_mysql_dentte_backend` e reiniciar o container para que o docker o crie novamente.