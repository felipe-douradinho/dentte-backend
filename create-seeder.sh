#!/bin/bash

####
#Eg: ./create-seeder.sh UserRole User
###

# Create a model
docker exec -it php_dentte_backend php artisan module:make-seed $1 $2