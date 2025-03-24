# Task Management API Documentation

This document outlines the API endpoints available for the task management system.

## Task Endpoints

### Get All Tasks
- **URL**: `/api/tasks`
- **Method**: GET
- **Description**: Retrieves all tasks with their associated users
- **Response**: Array of task objects

### Get Task by ID
- **URL**: `/api/tasks/{id}`
- **Method**: GET
- **Description**: Retrieves a specific task by its ID
- **Response**: Task object

### Create Task
- **URL**: `/api/tasks`
- **Method**: POST
- **Description**: Creates a new task and associates it with a user (creates the user if it doesn't exist)
- **Request Body**:
  ```json
  {
    "name": "User Name",
    "title": "Task Title",
    "description": "Task Description",
    "status": "pending",
    "priority": "medium",
    "due_date": "2025-04-01 10:00:00"
  }
  ```
- **Response**: Newly created task object

### Update Task
- **URL**: `/api/tasks/{id}`
- **Method**: PUT
- **Description**: Updates a task by its ID
- **Request Body**:
  ```json
  {
    "title": "Updated Task Title",
    "description": "Updated Task Description",
    "status": "completed",
    "priority": "high",
    "due_date": "2025-04-02 10:00:00"
  }
  ```
- **Response**: Updated task object

### Update Task Status
- **URL**: `/api/tasks/{id}/status`
- **Method**: PATCH
- **Description**: Updates only the status of a task
- **Request Body**:
  ```json
  {
    "status": "completed"
  }
  ```
- **Response**: Updated task object

### Delete Task
- **URL**: `/api/tasks/{id}`
- **Method**: DELETE
- **Description**: Deletes a task by its ID
- **Response**: 204 No Content

## User Endpoints

### Get All Users
- **URL**: `/api/users`
- **Method**: GET
- **Description**: Retrieves all users
- **Response**: Array of user objects

### Get User by ID
- **URL**: `/api/users/{id}`
- **Method**: GET
- **Description**: Retrieves a specific user by its ID
- **Response**: User object

### Create User
- **URL**: `/api/users`
- **Method**: POST
- **Description**: Creates a new user
- **Request Body**:
  ```json
  {
    "name": "User Name"
  }
  ```
- **Response**: Newly created user object

### Get User's Tasks
- **URL**: `/api/users/{id}/tasks`
- **Method**: GET
- **Description**: Retrieves all tasks associated with a specific user
- **Response**: Array of task objects

## Field Descriptions

### Task Fields
- `title`: Title of the task
- `description`: Detailed description of the task
- `status`: Current status of the task (pending, completed, in_progress)
- `priority`: Priority level of the task (low, medium, high)
- `due_date`: Due date for the task (YYYY-MM-DD HH:MM:SS)
- `user_id`: ID of the user associated with the task

### User Fields
- `name`: Name of the user
