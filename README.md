# Task Management App

This is a web application that allows users to manage tasks. It consists of a front-end developed with Vue.js and a back-end built with Laravel, utilizing MongoDB for task storage.

## Table of Contents

- [Task Management App](#task-management-app)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Features](#features)
    - [Front-End (Vue.js)](#front-end-vuejs)
    - [Back-End (Laravel)](#back-end-laravel)
  - [Bonus Features](#bonus-features)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)

## Introduction

The Task Management App is designed to provide users with a platform to manage their tasks effectively. The app comprises both a front-end and a back-end, working together seamlessly to enable task creation, viewing, updating, and deletion.

## Features

### Front-End (Vue.js)

- View a list of tasks.
- Add new tasks with titles and descriptions using a form.
- Mark tasks as complete using checkboxes.
- Delete tasks from the list using a delete button.
- Utilizes Vue.js for dynamic and responsive user interface.
- Styling implemented using the Tailwind CSS framework.

### Back-End (Laravel)

- Provides a RESTful API with the following endpoints:
  - `GET /api/tasks`: Retrieve a list of tasks.
  - `POST /api/tasks`: Add a new task.
  - `PUT /api/tasks/:taskId`: Update a task's completion status.
  - `DELETE /api/tasks/:taskId`: Delete a task.
- MongoDB is used for storing tasks, each containing a title, description, and completion status.
- Interactions with the MongoDB database are facilitated through Mongoose or a similar library.

## Bonus Features

- User authentication using JWT tokens.
- Validation to ensure task titles are unique.

## Getting Started

### Prerequisites

- Node.js and npm
- Composer
- MongoDB

### Installation

1. Clone the repository: `git clone https://github.com/Ferchahki/Management-tasks`
2. Navigate to the project directory:
   ```bash
   cd task-management-app
