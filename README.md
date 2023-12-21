# Simple PHP Todo App

Welcome to the Simple PHP Todo App repository! This is a basic todo application built using PHP, designed to help you manage your tasks in a straightforward manner. This project serves as a starting point for those who want to understand the fundamentals of building a web application with PHP.

## Features
-  **User Registration and Signup:** Register and sign up to have your own personalized todo list.
- **Add Tasks:** Easily add new tasks to your todo list.
- **Update Tasks:** Modify tasks easily if necessary.
- **Delete Tasks:** Remove tasks from your list when they are no longer needed or completed.
- **Simple and Intuitive:** The application focuses on simplicity and ease of use.

## Requirements

To run this application, you need:

- **PHP:** Ensure that you have PHP installed on your server or local environment.
- **Web Server:** You can use Apache, Nginx, or any other web server of your choice.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/Unishkhadka/Todo_php.git
    ```

2. Move into the project directory:

    ```bash
    cd Todo_php
    ```

3. **Database Setup:**

   - **Create a Database:**
     - Open your preferred database management tool (e.g., MySQL, phpMyAdmin).
     - Create a new database and name it `todo`.

   - **Create User Table:**
     - Within the `todo` database, create a table named `user`.
     - The table should have the following columns:
       - `id` (auto-increment, primary key)
       - `username` (varchar to store the username)
       - `email` (varchar to store the email address)
       - `password` (varchar to store the password)

       You can use the following SQL query to create the table:

       ```sql
       CREATE TABLE user (
           User_id INT AUTO_INCREMENT PRIMARY KEY,
           Username VARCHAR(255),
           Email VARCHAR(255),
           Password VARCHAR(255)
       );
       ```

   - **Create Todo List Table:**
     - Within the `todo` database, create a table named `todo_list`.
     - The table should have the following columns:
       - `Task_id` (auto-increment, primary key)
       - `task` (text to store the task description)
       - `User_id` (foreign key referencing the `User_id` column in the `user` table)

       You can use the following SQL query to create the table:

       ```sql
       CREATE TABLE todo_list (
           Task_id INT AUTO_INCREMENT PRIMARY KEY,
           Task TEXT,
           User_id INT,
           FOREIGN KEY (User_id) REFERENCES user(User_id)
       );
       ```
4. Start your preferred web server, ensuring that it has PHP support.

5. Open the application in your web browser. If you're running it locally, the URL might be something like `http://localhost/Todo_php`.

## Usage

1. Register and sign up to create your account.
2. Log in with your credentials.
2. Open the application in your web browser.
3. Add tasks using the input field and "Add Task" button.
4. Update tasks by clicking on the task and making the necessary changes.
5. Delete tasks by clicking the "Delete" button next to the task.

## Contributing

If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch.
3. Make your changes and commit them.
4. Push to the branch.
5. Submit a pull request.

## Acknowledgments

- This project is inspired by the need for a simple, minimalistic todo application.
- Special thanks to the PHP community for their continuous support and contributions.

Feel free to explore, modify, and enhance the Simple PHP Todo App to suit your needs. If you encounter any issues or have suggestions for improvement, don't hesitate to open an issue or submit a pull request. Happy coding!
