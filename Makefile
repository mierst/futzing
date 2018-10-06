.PHONY: run

run:
	docker run --workdir /app -v ${PWD}:/app php:7 php app.php
