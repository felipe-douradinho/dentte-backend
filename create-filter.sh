#!/bin/bash

####
# FilterName + Model + Module
#Eg: ./create-filter.sh TheCarFilter TheCar User
###

# Create a filter
docker exec -it php_dentte_backend php artisan module:make-filter $1 $2 $3