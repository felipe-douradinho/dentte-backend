#!/bin/bash

####
# Classname + Entity + ModuleName
#Eg: ./create-policy.sh UserPolicy User User
###

# Create a model
docker exec -it php_dentte_backend php artisan module:make-policy $1 $2 $3