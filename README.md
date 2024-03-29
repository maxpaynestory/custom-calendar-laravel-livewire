# Custom Calendar web application using Laravel and Livewire

## Pre-requisites Softwares
Docker Desktop

Git

## Instructions for running the application.
### Step 1
Clone this repository and inside project root run
```sh
docker-compose up -d
```
### Step 2
Open phpMyAdmin using URL http://localhost:8080/

Download zip file from https://drive.google.com/file/d/18d8zyNqmBIfUL0jr2IRoInZbVPqhtTHI/view and import all sql scripts  to laravel database using phpMyAdmin

### Step 3
On project root install dependencies and run migrations by
```sh
docker-compose exec composer composer install
docker-compose down
docker-compose up -d
docker-compose exec web php artisan migrate
```

### Step 4
Download zip file from https://drive.google.com/file/d/18d8zyNqmBIfUL0jr2IRoInZbVPqhtTHI/view and copy folders 
```sh
css
fonts
images
js
```
from moCal_MyCalender.zip to public

### Application Running at
http://localhost/

### Explanation of the functionality
Application contain a Calendar component built using livewire 3. The Component is available at 
```sh
app/Livewire/Calendar.php
```
Calander component can be used inside any blade template with the below tag
```html
<livewire:calendar />
```

After opening the application a calendar will be presented to you. Selecting an available timeslot on the calendar and dragging it either above or below will highlight and select the entire range of time