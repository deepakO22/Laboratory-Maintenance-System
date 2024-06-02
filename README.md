# 🖥️Laboratory Maintenance System

## Overview
#### The Laboratory Maintenance System (LMS) is a web-based application developed as a college coursework project for NBKRIST College. It facilitates the management and maintenance of laboratory resources and schedules. The system provides secure login functionality for both administrators and students.

## 🎯Features
####
 - **Admin Login**: Secure login for administrators to manage lab resources.
 - **Student Registration and Login**: Students can register and login to access the LMS.
 - **Main Page**: After login, users can view lab constituents and equipment.
 - **Timetable**: Navigation bar option to select and view the timetable for each time slot.

## 🛠️Tech Stack
 - **Frontend**: HTML, CSS, JavaScript
 - **Backend**: PHP
 - **Database**: MySQL (via XAMPP)
 - **Server**: Apache (via XAMPP)
## Installation and Setup
 ### Prerequisites
   - XAMPP Server (includes Apache and MySQL)
   - Web Browser
 ### Steps
1. **Download and Install XAMPP**: 
   - Download XAMPP from the official website: [XAMPP](https://www.apachefriends.org/download.html)
   - Follow the installation instructions to set up XAMPP on your machine.
2. **Clone the Repository**:
   - Clone this repository to your local machine using:
     ```bash
     git clone https://github.com/deepakO22/Laboratory-Maintenance-System.git
     ```

3. **Move Project to XAMPP Directory**:
   - Copy the project folder to the `htdocs` directory in your XAMPP installation directory. Typically, this can be found at:
     ```
     C:\xampp\htdocs\
     ```

4. **Start XAMPP**:
   - Open XAMPP Control Panel and start the Apache and MySQL modules.

5. **Database Setup**:
   - Open your web browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `lms`.
   - Import the database schema from the `database` folder within your project directory (e.g., `lms.sql`).

6. **Configure Database Connection**:
   - Open `server.php` (or the relevant configuration file) in your project directory.
   - Ensure the database connection settings match your MySQL setup:
     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "lms";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

7. **Run the Application**:
   - Open your web browser and navigate to `http://localhost/laboratory-maintenance-system/login.php`.

## ⚙Usage
- **Admin Login**:
  - Navigate to the admin login page and enter your credentials to access the admin dashboard.
  - Manage lab resources and timetables from the admin dashboard.

- **Student Registration and Login**:
  - Register a new student account or login with existing credentials.
  - Access the main page to view lab constituents and equipment.
  - Use the navigation bar to view the timetable for each lab.

## 👩🏻‍💻Data Entry
- **Lab Equipment Details**: Users need to enter their own lab equipment details to access the information. The system does not come pre-loaded with NBKRIST College data due to confidentiality.
- **Lab Timetables**: Users must input their own lab timetables to view and manage schedules.

## 📝Known Issues
- Users may encounter a `mysqli` fatal error if there are issues with data retrieval when viewing the lab timetable or lab constituents. Ensure the database is correctly set up and populated with data to avoid these errors.
- Error Handling: Users may encounter a mysqli fatal error if there are issues with data retrieval.

## 🔐Confidentiality
- This project contains placeholders for confidential information about laboratory constituents. Users must enter their own data and should not attempt to use NBKRIST College's confidential information.

## License
- This project is a college coursework project and is intended to be used as a template for developing your own Laboratory Maintenance System (LMS). Users must enter their own data and should ensure the confidentiality of their own lab information. Unauthorized distribution or reproduction of this project is prohibited.
