#!/bin/bash

####
# ModuleName + Tablename + Entity
#Eg: ./create-policy.sh UserPolicy User User
###

docker exec -it php_dentte_backend php artisan module:make --api $1
docker exec -it php_dentte_backend php artisan module:make-model $1 $1
docker exec -it php_dentte_backend php artisan module:make-request $1UpdateRequest $1
docker exec -it php_dentte_backend php artisan module:make-request $1StoreRequest $1

# Create Policy
./create-policy.sh $1Policy $1 $1

# Create Migration
./create-migration.sh $1 $2 $1

# Create Filter
./create-filter.sh $1Filter $1 $1

echo "===> Renomeando src/Modules/$1/Repositories/NAMERepositoryInterface.php ===>> src/Modules/$1/Repositories/$1RepositoryInterface.php"
mv -f src/Modules/$1/Repositories/NAMERepositoryInterface.php src/Modules/$1/Repositories/$1RepositoryInterface.php

echo "===> Renomeando src/Modules/$1/Repositories/Eloquent/NAMERepository.php ===>> src/Modules/$1/Repositories/Eloquent/$1Repository.php"
mv -f src/Modules/$1/Repositories/Eloquent/NAMERepository.php src/Modules/$1/Repositories/Eloquent/$1Repository.php

echo "===> Renomeando src/Modules/$1/Services/NAMEService.php ===>> src/Modules/$1/Services/$1Service.php"
mv -f src/Modules/$1/Services/NAMEService.php src/Modules/$1/Services/$1Service.php

echo "===> Renomeando src/Modules/$1/Factories(...)"
mv -f src/Modules/$1/Database/factories src/Modules/$1/Database/Factoriess
mv -f src/Modules/$1/Database/Factoriess src/Modules/$1/Database/Factories
mv -f src/Modules/$1/Database/Factories/NAMEFactory.php src/Modules/$1/Database/Factories/$1Factory.php

echo "===> Renomeando src/Modules/$1/Database/$1TableSeeder.php ===>> src/Modules/$1/Database/$1Seeder.php"
mv -f src/Modules/$1/Database/Seeders/NAMESeeder.php src/Modules/$1/Database/Seeders/$1Seeder.php

echo "===> Removendo src/Modules/$1/Database/Seeders/$1DatabaseSeeder.php"
rm -fR src/Modules/$1/Database/Seeders/$1DatabaseSeeder.php

#echo "===> Renomeando src/Modules/$1/Database/Seeders/NAMEDatabaseSeeder.php ===>> src/Modules/$1/Database/Seeders/DatabaseSeeder.php"
mv -f src/Modules/$1/Database/Seeders/NAMEDatabaseSeeder.php src/Modules/$1/Database/Seeders/DatabaseSeeder.php

echo "===> Removendo src/Modules/$1/Http/Controllers/NAMEController.php"
rm -f -R src/Modules/$1/Http/Controllers/NAMEController.php

echo "===> Renomeando src/Modules/$1/Transformers/NAMEResource.php ===>> src/Modules/$1/Transformers/$1Resource.php"
mv -f src/Modules/$1/Transformers/NAMEResource.php src/Modules/$1/Transformers/$1Resource.php

echo "===> Renomeando src/Modules/$1/Transformers/NAMEResourceCollection.php ===>> src/Modules/$1/Transformers/$1ResourceCollection.php"
mv -f src/Modules/$1/Transformers/NAMEResourceCollection.php src/Modules/$1/Transformers/$1ResourceCollection.php