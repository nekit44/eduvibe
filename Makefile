init: docker-down-clear docker-pull docker-build docker-up composer-update yii-migrate
up: docker-up
down: docker-down
restart: down up

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

composer-update:
	docker-compose exec php-cli composer update

yii-migrate:
	docker-compose exec php-cli php yii migrate --interactive=0

