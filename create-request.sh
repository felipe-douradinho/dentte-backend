#!/bin/bash

####
# Model + Module
# Eg: ./create-request.sh ExpenseCategory Expense
###

docker exec -it php_dentte_backend php artisan module:make-request $1UpdateRequest $2
docker exec -it php_dentte_backend php artisan module:make-request $1StoreRequest $2