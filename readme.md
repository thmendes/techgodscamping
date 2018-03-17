# TechGodsCamping

TechGodsCamping é um projeto de gerenciamento de acampamentos que roda sobre o framework Laravel 5.4, Vue.js e usa o template Gentelella.

# Instalação

## Passo 1

### Com o GIT
Clone este repositório.

HTTPS
```
git clone https://github.com/thmendes/techgodscamping
```

Vá até o diretório
```
cd techgodscamping
```

Utilize o composer para instalar as dependências
```
composer install
```

## Passo 2
Copy ```.env.example``` file to ```.env```

Renomeie o arquivo .env.exemple
```
cp .env.example .env
```

Gere a chave do projeto

```
php artisan key:generate
```

Após ter configurado o seu arquivo ```.env``` rode o seguinte comando:
```
php artisan migrate
```

# Regras de negócio

