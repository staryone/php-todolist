# Simple PHP Todo List

## Description
This project is a simple todo list application built using PHP and MySQL as the backend and Bootstrap as the frontend. This project aims to enhance my PHP learning experience.

## Table of Contents
1. [About the Project](#about-the-project)
2. [Installation](#installation)
3. [Usage](#usage)
4. [Features](#features)
5. [Database Schema](#database-schema)
6. [Contribution](#contribution)
7. [License](#license)
8. [Demo](#demo)

## About the Project
This project uses plain PHP without a framework for the backend and MySQL for data storage. On the frontend side, this project uses Bootstrap for a responsive and attractive interface.

## Installation
Steps to install and run the project:
1. Ensure `xampp` is installed on your device.
2. Locate the `htdocs` directory and open it via the terminal.
3. Clone the repository: `git clone https://github.com/staryone/php-todolist.git`
4. Navigate to the project directory: `cd php-todolist`
5. Create a new MySQL database and import the database schema (see [Database Schema](#database-schema)).
6. Configure the database settings in the `src/connection.php` file.
7. Run the project on a local server or hosting.

## Usage
Instructions for using the project after installation:
1. Open the registration page to create a new account.
2. Log in with the newly created account.
3. Add, read, update, and delete todos as needed.
4. Check todos to mark them as completed.

## Features
- **Register:** Users can create a new account. Username must be unique; if already registered in the database, an error will occur.
- **Login:** Users can log in with an existing account.
- **Create Todo:** Users can add new todos.
- **Read Todo:** Users can view their todos.
- **Update Todo:** Users can update existing todos.
- **Delete Todo:** Users can delete unnecessary todos.
- **Checklist Todo:** Users can mark todos as completed by checking the checkbox; completed todos will be struck through.

## Database Schema
### Users Table
- `id` int 11 (primary key)
- `username` varchar 255 (unique key)
- `password` varchar 255

### Todos Table
- `id` int 11 (primary key)
- `username` varchar 255 (foreign key referencing users.username)
- `note` varchar 255 (where the todo is stored)
- `status` int 11 (to indicate whether the todo is checked or not)

## Demo
You can view the project demo at [DEMO (Soon Live)](http://todolist-php.rf.gd/).
