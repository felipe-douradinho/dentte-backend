#!/bin/bash

####
#Eg: ./create-entity.sh PatientPhone patient_phones Patient
###

# Create a migration
docker exec -it php_dentte_backend php artisan module:make-migration create_$2_table $1 $3

# Create a model
docker exec -it php_dentte_backend php artisan module:make-model $1 $3

# Create a factory
docker exec -it php_dentte_backend php artisan module:make-factory $1 $3