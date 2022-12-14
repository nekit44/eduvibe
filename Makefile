init: docker-down-clear docker-pull docker-build docker-up composer-update yii-migrate web-app
up: docker-up
down: docker-down
restart: down up web-app
test: test-migrate test-run
ym: yii-migrate
ymc: yii-migrate-create
ymd: yii-migrate-down

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

web-app:
	start chrome "https://127.0.0.1:8080/"

yii-migrate:
	docker-compose exec php-cli php yii migrate --interactive=0

yii-migrate-create:
	docker-compose exec php-cli php yii migrate/create ${NAME} --interactive=0

yii-migrate-down:
	docker-compose exec php-cli php yii migrate/down --interactive=0

test-migrate:
	docker-compose exec php-cli php yii_test migrate --interactive=0

test-run:
	docker-compose exec php-cli php vendor/bin/codecept run

