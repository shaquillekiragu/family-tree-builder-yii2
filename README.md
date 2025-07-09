# family-tree-builder-yii2

## Tech Stack:

- Yii2: As the full-stack project framework
- TailwindCSS: As a CSS styling framework
- MySQL: As the database solution
- Render: For full-stack project deployment

# Running Instructions:

## Create Database

```sh
brew install mysql;
brew services start mysql;
mysql -u root -e "CREATE DATABASE IF NOT EXISTS yii2basic CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
mysql -u root -e "CREATE DATABASE IF NOT EXISTS yii2basic_test CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
```

## First time

```sh
docker-compose up;
```

## Every other time

```sh
docker-compose up;
```

<br>

## Docker Commands:

### Commands for running Docker:

docker-compose up: Starts the project

docker-compose up –d: Starts the project in a detached mode - runs in the background

docker-compose down: Stops the project

docker-compose down –v: Stops the project and remove volumes, the database data

docker-compose restart: Restarts the project

docker-compose build: Rebuilds the container (if you switch Dockerfile)

docker-compose up --build: Rebuilds and starts the process

<br>

### Useful Commands:

docker-compose ps: Checks if containers are running

docker-compose exec php bash: Debug inside container

docker-compose logs -f: View real-time logs

docker-compose exec php composer install: Install dependencies

docker-compose exec php composer update: Update dependencies

docker-compose exec php ./yii migrate: Runs db migrations

docker-compose exec php ./yii cache/flush-all: Clears application cache
