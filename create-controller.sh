#!/bin/bash

####
# Classname + Entity + ModuleName
#Eg: ./create-policy.sh UserPolicy User User
###

# Create a controller
docker exec -it php_dentte_backend php artisan module:make-controller $1 $2 $3 --api