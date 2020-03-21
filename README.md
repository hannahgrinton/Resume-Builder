# Resume-Builder
## PHP Project 2 - Laravel


### ->Artisan Commands used:

#### laravel new Resume-Builder-App
-Build new application
#### composer require laravel/ui
-Get the laravel user interface tools
#### php artisan ui vue --auth
-Get the laravel Vue authentication
#### php artisan serve
-Serve the site on localhost
#### php artisan make:migration create_resumeItems_table --create=resume_items
-Build the database table to hold resume items
#### php artisan make:migration create_generatedResumes_table --create=generatedResumes
-Build the database table to hold resumes
#### php artisan make:migration create_resumeRelations_table --create=resumeRelations
-Build the database table to hold the relations between resume items and resumes
#### php artisan make:seeder ResumeItemsTableSeeder
-Create a seeder for our resume items table
#### php artisan migrate
-Migrate the tables into the database
#### composer dump-autoload
-Clear the autoloader
#### php artisan db:seed
-Seed the database with our seeders
#### php artisan make:controller ResumeController
-Make a controller for our resume work
#### php artisan make:controller ManagerController
-Make a controller for our admin end