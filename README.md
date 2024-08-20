# Project Setup

## Prepare config

First, create the `.env` file by copying the example file:

```bash
cp .env.example .env
```

## Install Dependencies

```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php83-composer:latest \
composer install --ignore-platform-reqs
```

## Start the Docker Containers

```bash
./vendor/bin/sail up -d
```

## Generate Application Key

```bash
./vendor/bin/sail exec artisan key:generate --ansi
```

## Run Database Migrations

```bash
./vendor/bin/sail  artisan migrate
```

# Run the Project

## Run containers

```bash
./vendor/bin/sail up -d
```

## Start the Queue Worker

```bash
./vendor/bin/sail  artisan queue:work
```

# Testing

```bash
./vendor/bin/sail  artisan test
```
