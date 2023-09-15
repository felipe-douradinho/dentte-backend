#!/bin/bash


####
# ModuleName + Tablename + ModelName
#Eg: ./create-model.sh PatientPhone Patient
###

# Create a migration
docker exec -it php_dentte_backend php artisan module:make-migration create_$2_table $1 $3