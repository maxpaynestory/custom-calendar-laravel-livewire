# Custom Calendar web application using Laravel and Livewire

## Pre-requisites
Docker Desktop software

## Setup
### Step 1
Clone repository and on project root run
```sh
docker-compose up -d
```
### Step 2
Open phpMyAdmin using URL https://localhost:8080/

Import all sql scripts inside laravel database

### Step 3
On project root install dependencies and run migrations by
```sh
docker-compose exec composer composer install
docker-compose exec web php artisan migrate
```

### Step 4
Copy folders 
```sh
css
fonts
images
js
```
from moCal_MyCalender.zip to public

### Server Running at
http://localhost/