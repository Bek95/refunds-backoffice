install: ##@Docker Build or rebuild services
	php -r "file_exists('application/.env') || copy('application/.env.local', 'application/.env');"
	docker-compose -f infrastructure/docker/docker-compose-local.yml -p bo-refund-network up --build  -d

build: ##@Docker Build composer
	docker-compose -f infrastructure/docker/docker-compose-build.yml -p bo-refund-network up --build

start: ##@Docker start container
	docker-compose -f infrastructure/docker/docker-compose-local.yml -p bo-refund-network up -d

stop: ##@Docker stop container
	docker-compose -f infrastructure/docker/docker-compose-local.yml -p bo-refund-network stop

clean: stop ##@Docker clear all images
	docker rmi -f $$(docker images -q)

