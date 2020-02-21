<?php declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Swoole\Http\Server('swoole', 9501);

$server->on('start', function (Swoole\Http\Server $server) {
	echo 'Swoole is running on port 9501.' . PHP_EOL;
});

$server->on('request', function (Request $request, Response $response) {
	$response->header('Content-Type', 'text/plain');

	$response->end(sprintf(
		"Cannot %s %s",
		$request->server['request_method'],
		$request->server['request_uri'],
	);
});

$server->start();
