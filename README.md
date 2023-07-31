
## Instalação

Baixe o repositorio

```bash
git clone git@github.com:leandrofacim/teste-facil-consulta.git
cd teste-facil-consulta
```

Instale as dependencias com o comando abaixo:

```bash
  docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Em seguida executa o comando abaixo:
```base
./vendor/bin/sail up 
```


Gerando as tabelas:

```bash
sail artisan migrate
```

Gerando as seeders
```bash
./vendor/bin/sail artisan db:seed
```
