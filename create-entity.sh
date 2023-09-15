#!/bin/bash

####
# Model + Tablename + ModuleName
#Eg: ./create-entity.sh PatientPhone patient_phones Patient
###

# Create the model
./create-model.sh $1 $2 $3

# Create the controller
./create-controller.sh $1 $1 $3

# Create the Requests
docker exec -it php_dentte_backend php artisan module:make-request $1UpdateRequest $3
docker exec -it php_dentte_backend php artisan module:make-request $1StoreRequest $3

# Create Policy
./create-policy.sh $1Policy $1 $3

# Create Filter
./create-filter.sh $1Filter $1 $3

# Create Resources
docker exec -it php_dentte_backend php artisan module:make-resource $1Resource $3
docker exec -it php_dentte_backend php artisan module:make-resource --collection $1Collection $3 $1

# Create Repositories
docker exec -it php_dentte_backend php artisan module:make-repository-interface $1RepositoryInterface $1 $3
docker exec -it php_dentte_backend php artisan module:make-repository-eloquent $1Repository $1 $3

# Create Service
docker exec -it php_dentte_backend php artisan module:make-service $1Service $1 $3

# Create Seeders
./create-seeder.sh $1 $3

echo -e "\n\n################################################################################"
echo -e "  Pronto! Não esqueça de modificar:\n"
echo -e "\t=> Modules/$3/Providers/RepositoryServiceProvider"
echo -e "\t=> Modules/$3/Routes/api.php ou web.php"
echo -e "\n  E de incluir a PERMISSÃO em:\n"
echo -e "\t=> src/Modules/Auth/Services/PermissionService.php"
echo -e "################################################################################"