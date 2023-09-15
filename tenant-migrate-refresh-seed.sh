#!/bin/bash

####
#Eg: ./tenant-migrate-refresh-seed.sh
###

# Tenancy
docker exec -it php_dentte_backend php artisan migrate:refresh --seed --path=Modules/Tenancy/Database/Migrations --seeder=Modules\\Tenancy\\Database\\Seeders\\DatabaseSeeder --database=mysql

########################
# Tenant Truncate
docker exec -it php_dentte_backend php artisan tenants:migrate-fresh
########################

# Core
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Core/Database/Migrations --seeder=Modules\\Core\\Database\\Seeders\\DatabaseSeeder

# Permission and Roles
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Auth/Database/Migrations --seeder=Modules\\Auth\\Database\\Seeders\\DatabaseSeeder

# Companies
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Company/Database/Migrations --seeder=Modules\\Company\\Database\\Seeders\\DatabaseSeeder

# Localizations
docker exec -it php_dentte_backend php artisan migrate:refresh --seed --path=Modules/Localization/Database/Migrations --seeder=Modules\\Localization\\Database\\Seeders\\DatabaseSeeder --database=mysql_base

# User
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/User/Database/Migrations --seeder=Modules\\User\\Database\\Seeders\\DatabaseSeeder

# BASE
docker exec -it php_dentte_backend php artisan migrate:install --database=mysql_base --quiet
docker exec -it php_dentte_backend php artisan migrate:refresh --seed --path=Modules/Base/Database/Migrations --seeder=Modules\\Base\\Database\\Seeders\\DatabaseSeeder --database=mysql_base

# APP (migration table)
#docker exec -it php_dentte_backend php artisan migrate:install --quiet

# Plan
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Plan/Database/Migrations --seeder=Modules\\Plan\\Database\\Seeders\\DatabaseSeeder

# Referers
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Referer/Database/Migrations --seeder=Modules\\Referer\\Database\\Seeders\\DatabaseSeeder

# Patients
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Patient/Database/Migrations --seeder=Modules\\Patient\\Database\\Seeders\\DatabaseSeeder

# Cashs
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Cash/Database/Migrations --seeder=Modules\\Cash\\Database\\Seeders\\DatabaseSeeder

# Expenses
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Expense/Database/Migrations --seeder=Modules\\Expense\\Database\\Seeders\\DatabaseSeeder

# Chairs
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Chair/Database/Migrations --seeder=Modules\\Chair\\Database\\Seeders\\DatabaseSeeder

# Teeth
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Tooth/Database/Migrations --seeder=Modules\\Tooth\\Database\\Seeders\\DatabaseSeeder

# Quotes
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Quote/Database/Migrations --seeder=Modules\\Quote\\Database\\Seeders\\DatabaseSeeder

# Products
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Product/Database/Migrations --seeder=Modules\\Product\\Database\\Seeders\\DatabaseSeeder

# Stocks
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Stock/Database/Migrations --seeder=Modules\\Stock\\Database\\Seeders\\DatabaseSeeder

# Pipelines
docker exec -it php_dentte_backend php artisan tenants:migrate --seed --path=Modules/Pipeline/Database/Migrations --seeder=Modules\\Pipeline\\Database\\Seeders\\DatabaseSeeder