# Blood Bank Management System

A web-based Blood Bank Management System developed using **HTML, CSS, PHP and MySQL**. The application provides modules to manage doctors, donors, patients and blood bank records, along with a blood search feature.

## Project Overview

The system helps organize blood bank-related information in a centralized database. Users can register and sign in to access the application, manage records through dedicated modules, and search for blood bank information.

## Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Local development environment:** XAMPP
- **Web server:** Apache

## Features

### 1. User Authentication
- User signup and login.
- Logout functionality.
- Forgot-password and reset-password pages.

### 2. Doctor Management
- Register doctor details, including doctor ID, name, address and phone number.
- View doctor records.
- Edit and delete doctor records.

### 3. Donor Management
- Register donor details, including donor ID, name, gender, address, date of birth, weight, phone number and referred doctor ID.
- View donor records.
- Edit and delete donor records.

### 4. Patient Management
- Register and manage patient information.
- View patient records.
- Edit and delete patient records.

### 5. Blood Bank Management
- Add and manage blood bank information.
- View and update blood bank records.
- Delete blood bank records.

### 6. Search Blood
- Search for blood bank information through the Search Blood module.

## Database Design

The database design includes the following main entities:

| Entity | Purpose |
|---|---|
| **DOCTOR** | Stores doctor details such as ID, name, address and phone number. |
| **DONOR** | Stores donor details such as ID, name, gender, address, DOB, weight, phone number and referred doctor ID. |
| **BLOODBANK** | Stores blood bank information, including blood bank ID, blood type, name and address. |
| **PATIENT** | Stores patient details such as ID, name, address and phone number. |

### Entity Relationships

The ER diagram represents these relationships:

- **Doctor – Donor:** A doctor examines donors. The diagram shows a one-to-many relationship.
- **Donor – Blood Bank:** Donors donate blood to a blood bank. The diagram shows a one-to-many relationship.
- **Patient – Blood Bank:** Blood is delivered from a blood bank to patients. The diagram shows many patients associated with one blood bank.

The ER diagram is included in the project repository.

## Project Structure

The repository contains HTML pages for the user interface and PHP files for server-side operations. The main files include:

```text
Blood_Bank_Management_System/
├── index.html
├── login.html
├── signup.html
├── doctor.html
├── donor.html
├── patient.html
├── bloodbank.html
├── search_blood.html
├── db_connect.php
├── signin.php
├── signup.php
├── logout.php
├── save_doctor.php
├── display_doctor.php
├── delete_doctor.php
├── save_donor.php
├── display_donor.php
├── edit_donor.php
├── delete_donor.php
├── save_patient.php
├── display_patient.php
├── delete_patient.php
├── save_bloodbank.php
├── display_bloodbank.php
├── update_bloodbank.php
├── delete_bloodbank.php
├── search_blood.php
└── README.md
```

*This is a representative list of the files visible in the project; the repository may contain additional files.*

## Setup and Installation

### Prerequisites

- XAMPP
- A web browser
- A code editor such as Visual Studio Code

### Steps to Run Locally

1. Install and open **XAMPP**.
2. Start the **Apache** and **MySQL** services.
3. Clone or download this repository:

   ```bash
   git clone https://github.com/annapoorna-g-padiyar/Blood_Bank_Management_System.git
   ```

4. Copy the project folder into XAMPP's `htdocs` directory.

   Example:

   ```text
   C:\xampp\htdocs\Blood_Bank_Management_System
   ```

5. Open phpMyAdmin in your browser:

   ```text
   http://localhost/phpmyadmin
   ```

6. Create the database and import the project's SQL file, if one is included. If no SQL export is present, create the tables according to the database design used by the application.
7. Check `db_connect.php` and update the database host, database name, username and password to match your local MySQL configuration.
8. Open the application in your browser:

   ```text
   http://localhost/Blood_Bank_Management_System/index.html
   ```

## Application Screenshots

Screenshots can be added to this section to show the application's interface.

| Module | Screenshot |
|---|---|
| Home page | Add the home page screenshot |
| Login page | Add the login page screenshot |
| Doctor registration | Add the doctor registration screenshot |
| Donor registration | Add the donor registration screenshot |
| Records page | Add a records page screenshot |

To display a screenshot stored in the repository, use Markdown image syntax:

```markdown
![Home Page](screenshots/home.png)
```

## Future Enhancements

- Add automated notifications for blood requests.
- Provide blood stock availability alerts.
- Improve search with additional filters.
- Add reports and dashboard summaries.
- Strengthen access control and input validation.

## Author

**Annapoorna G Padiyar**

- GitHub: [annapoorna-g-padiyar](https://github.com/annapoorna-g-padiyar)
- Project repository: [Blood Bank Management System](https://github.com/annapoorna-g-padiyar/Blood_Bank_Management_System)
- LinkedIn: Add your LinkedIn profile URL

## Disclaimer

This project is developed for academic and learning purposes. It is intended to demonstrate basic blood bank record management and does not replace professional medical systems or clinical decisions.
