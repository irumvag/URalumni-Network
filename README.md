# UR Alumni Network

This project is a web-based platform for the alumni of the University of Rwanda (UR) to connect, network, and stay engaged with the university community.

## Features

*   **User Authentication:** Secure user registration, login, and logout functionality.
*   **User Profiles:** Alumni can create and manage their profiles, including personal information, academic details, and professional experience.
*   **Events:** View and register for alumni events.
*   **Groups:** Create and join special interest groups to connect with fellow alumni.
*   **Messaging:** Communicate with other alumni through a private messaging system.
*   **Opportunities:** Share and discover job opportunities, internships, and other professional openings.
*   **Achievements:** Showcase personal and professional achievements.
*   **Admin Panel:** Administrative features for managing users and content.

## Requirements

*   Apache Web Server
*   PHP 
*   MySQL Database

## Installation

1.  **Clone the repository or download the project files.**
2.  **Web Server Configuration:**
    *   1. Place the project files in the root directory of your web server (e.g., `htdocs` for XAMPP, `www` for WampServer).
    *   2. If you have installed php server, use php -S localhost:8000 to start the server.
    *   Ensure that `mod_rewrite` is enabled in your Apache configuration to allow for URL rewriting.
3.  **Database Setup:**
    *   Create a new MySQL database named `uralumni`.
    *   Import the `uralumni.sql` file into the `uralumni` database. This will create the necessary tables and seed them with initial data.
4.  **Database Connection:**
    *   Open the `connect.php` file.
    *   Update the database connection details if they are different from the default values:
        ```php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "uralumni";
        ```

## Usage

Once the project is set up, you can access it by navigating to the project URL in your web browser. You can then sign up for a new account or log in with existing credentials to access the platform's features.

## Contributing

Contributions to the project are welcome. Please feel free to fork the repository, make changes, and submit a pull request.
