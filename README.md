# Story-Time: Library Management System

**Story-Time** is a web-based library management system developed using PHP, HTML, CSS, and JavaScript. It is designed to simplify library operations by providing a user-friendly interface for managing books, users, and borrowing activities. This system is ideal for small to medium-sized libraries looking for an efficient way to manage their resources.

## Features

- **Book Management:**
  - Add, update, and delete book records.
  - Search and filter books by title, author, or ISBN.
  - Track the availability status of each book.

- **User Management:**
  - Register new users with unique credentials.
  - Manage user profiles, including borrowing history.
  - Assign different roles (e.g., admin, librarian, member) with varying levels of access.

- **Borrowing System:**
  - Record borrowing and return transactions.
  - Automatically update book availability based on borrow/return status.
  - Set due dates and send notifications for overdue books.

- **Search Functionality:**
  - Robust search capabilities for both books and users.
  - Filters to narrow down search results based on various criteria.

- **Responsive Design:**
  - Optimized for different screen sizes, ensuring usability on both desktop and mobile devices.

## Installation

### Prerequisites

- A web server with PHP support (e.g., Apache, Nginx).
- MySQL or MariaDB database.
- Basic knowledge of PHP, HTML, CSS, and JavaScript.

### Setup

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Se3do/Story-Time.git
   ```

2. **Database Configuration:**

   - Create a new database in your MySQL server.
   - Import the provided SQL file (`story_time.sql`) to set up the necessary tables.

   ```sql
   mysql -u username -p database_name < story_time.sql
   ```

   - Update the database connection settings in the `config.php` file.

3. **Deploy the Application:**

   - Place the project files in the web server’s root directory.
   - Ensure the server is configured to serve PHP files.

4. **Access the System:**

   - Open a web browser and navigate to `http://yourserveraddress/Story-Time`.
   - Login using the default credentials (admin/admin) and change the password immediately.

## Usage

- **Admin Panel:** Accessible to users with admin privileges. Manage books, users, and view transaction logs.
- **User Dashboard:** View personal borrowing history, search for books, and manage profile settings.

## Contribution

Contributions are welcome! If you find any bugs or want to suggest new features, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
