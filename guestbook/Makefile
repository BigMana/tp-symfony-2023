# Makefile
SHELL := /bin/bash
tests:
	symfony console doctrine:database:drop --force --env=test || true
	symfony console doctrine:database:create --env=test
	symfony console doctrine:migrations:migrate -n --env=test
	symfony console doctrine:fixtures:load -n --env=test
	symfony php bin/phpunit $(MAKECMDGOALS)

OpenStuff:
	docker compose up -database
	symfony serve -d
	symfony composer i
	symfony console d:m:m -n

.PHONY: tests
