#!/bin/bash

docker exec -it php_dentte_backend php artisan module:delete $1
