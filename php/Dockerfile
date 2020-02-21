FROM php:7.4-cli-alpine

RUN apk update && apk add git libstdc++ --no-cache && \
	docker-php-source extract && \
	cd /usr/src/php/ext && \
	git clone https://github.com/swoole/swoole-src.git swoole && \
	cd swoole && git checkout v4.4.15 && \
	docker-php-ext-configure swoole && \
	docker-php-ext-install swoole && \
	docker-php-ext-enable swoole && \
	docker-php-source delete && \
	apk del git && \
	echo -e "#!/bin/sh\n" > /entrypoint.sh && \
	echo -e "php index.php" >> /entrypoint.sh && \
	chmod +x /entrypoint.sh
