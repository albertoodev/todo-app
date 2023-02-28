# Todo Api using laravel
---
##### This is a Todo API built using the Laravel PHP framework. I made this application after learning Laravel basics to create and manage todo lists using RESTful API endpoints.
---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---
## Features

- User authentication and authorization
- Todo management (add, edit, delete,update)
- Change the Todo state

## Requirements

- PHP >= 7.4
- MySQL or any other compatible database server
- Laravel >= 8.x

## Installation

1- Clone this repository using Git or download the ZIP file.
2- Configure the database settings in the '.env' file.
3- Install the required dependencies using :
```sh
composer install
```
4- Run the migrations using :
```sh
php artisan migrate
```
5- Start the server using :
```sh
php artisan serve
```
## Usage

### Authentication
Users will be required to sign up or log in to access the API endpoints. Once authenticated, users will be able to access the various features of the application.
### Tasks Management
Users can create new todos by providing a title, description, and due date. Existing todos can also be edited or deleted as needed.
### User Management
Users can create new accounts by providing their personal details such as name, email, and password. Existing users can also be edited or deleted as needed.
### API Endpoints
The following API endpoints are available:
#### Auth & User managment
- POST /api/login - log in the user
- POST /api/register - create a new user
- POST /api/logout - logout the user
- Get /api/getUsers -retrieve a list of users
### Tasks

- GET /api/getAll - get pending tasks
- GET /api/getDoneTasks - get done tasks
- POST /api/add - create a new task
- DELETE /api/todos/{id} - delete a specific task
- POST /api//update/{id} - update a specific task
- POST /setStat/{id} - change the state of a specific task from pending to done or from done to pending
## Contributing
Contributions are welcome! Please submit any bug reports, feature requests, or pull requests through the Github repository.
