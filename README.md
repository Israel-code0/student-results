# Student Results Management System
📌 Overview

The Student Results Management System is a Laravel-based web application designed to manage students, courses, semesters, and academic results. It allows administrators to record, calculate, and view students’ grades and GPA per semester in a structured and secure way.

This project demonstrates practical use of Laravel’s MVC architecture, database relationships, validation, and Blade templating.

# ✨ Features

Student management (add, edit, delete students)

Course management with credit units

Result entry per semester

Automatic GPA calculation

View GPA by semester

Data validation and error handling

Clean and user-friendly interface

# 🛠️ Tech Stack

Backend: Laravel

Frontend: Blade Templates, HTML, CSS

Database: MySQL / SQLite

Styling: Bootstrap / Tailwind CSS

Tools: Composer, Artisan

# 🧠 What This Project Demonstrates

Proper use of Laravel MVC architecture

Database relationships:

Students → Results (One-to-Many)

Courses → Results (One-to-Many)

Server-side form validation

Passing data from controllers to Blade views

GPA calculation logic

Debugging and error handling in Laravel

# 📸 Screenshots

<img width="959" height="350" alt="image" src="https://github.com/user-attachments/assets/f8f83774-9b5a-4a63-a300-34e80306485c" />

<img width="956" height="433" alt="image" src="https://github.com/user-attachments/assets/c177738e-7fdc-463e-9026-c3febed63e11" />

<img width="953" height="343" alt="image" src="https://github.com/user-attachments/assets/8879b800-add4-4a5e-8732-8c10e0dbfd03" />

<img width="925" height="396" alt="image" src="https://github.com/user-attachments/assets/5ff7f7f4-2550-4fb0-98f2-8ec1c8ac8409" />


# ⚙️ Installation & Setup
1. Clone the repository
   git clone https://github.com/Israel-code0/student-results.git
   cd student-results

2. Install dependencies
   composer install

3. Environment setup
   cp .env.example .env
   php artisan key:generate

4. Configure database

Update your .env file:

DB_DATABASE=student_results
DB_USERNAME=root
DB_PASSWORD=

5. Run migrations
   php artisan migrate

6. Start the application
   php artisan serve


Visit:

http://127.0.0.1:8000
OR
http://student-results.test (if using Herd)

📊 GPA Calculation Logic

GPA is calculated using:

GPA = (Total Grade Points) / (Total Credit Units)


Each course contributes based on its credit unit and grade score.

🔐 Validation & Error Handling

Required fields are validated before submission

User-friendly error messages displayed in views

Prevents incomplete or incorrect result entries

🚀 Future Improvements

User authentication (Admin / Lecturer roles)

Export results as PDF

Student login to view results

Improved UI and dashboard analytics

👤 Author

Israel Abolarin
Aspiring Laravel Developer
GitHub: https://github.com/Israel-code0

📄 License

This project is for learning and portfolio purposes.
