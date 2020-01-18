# Student Placement System

## Team Alpha
Archan Shah, Harshil Patel, Preksha Patel, Nirmit Patel

## Technologies Used
PHP, JavaScript, Laravel, Google Charts API, HTML, CSS, Bootstrap

## Student Placement System
##### Student Placement System is a website which manages placement process in college makes an interactive GUI where the institute can manage details of candidates. 
##### Candidates can register themselves. They can look through job postings, download placement papers, view job details and apply for a job. Job applications are sent to Placement Officer via email and selected students get an email as well. 
##### Placement Officers can go through student profiles, add job openings, upload placement papers for students and update or delete fulfilled job positions.
##### Admin can add, update and delete placement officers. They are allowed to delete students too. Updation of contact details and FAQ page is made easier using simple forms to enter or update data.
##### Visualisation of data is done using Google Charts API. Placement Officers can view how many percentage of students are there in each course along with graphical depiction of GPA of individual students.

## Website Link and Login Credentials
- http://guarded-sierra-57737.herokuapp.com/
- Email for login credentials at :archanshahh@gmail.com

## Individual contribution in designing and developing web pages

### Archan Shah
- Home page (Student)
    - Views: home.blade.php
    
- Dashboard (Admin, Placement Officer, Student)
    - Views: 
        1. admin1/dashboard.blade.php
        2. student/dashboard.blade.php
        3. placementOfficer/dashboard.blade.php
        
- Charts (Pie Chart, Column Chart) (Placement Officer)
    - Controller: PlacementOfficer/ChartsController
    - URL: http://guarded-sierra-57737.herokuapp.com/index.php/po/view-chart
    - URL: http://guarded-sierra-57737.herokuapp.com/index.php/po/view-gpa-chart
    - Views:
        1. student/view-chart.blade.php
        2. student/view-gpa-chart.blade.php
        
- Manage Students (Admin)
    - Controller: StudentController
    - URL: http://guarded-sierra-57737.herokuapp.com/index.php/admin/manage-students
    - Views:
        1. Admin/manage-students.blade.php
        
- Student Registration (Development)
    - Controller: StudentController
    - URL: http://guarded-sierra-57737.herokuapp.com/register
    - Views:
        1. register.blade.php
      
- Update Student Profile (Development)
    - Controller: StudentController
    - URL: http://guarded-sierra-57737.herokuapp.com/student/edit
    - Views:
        1. edit.blade.php
        
- Download Placement Papers (Student)
    - Controller: PlacementPaperController
    - URL: http://guarded-sierra-57737.herokuapp.com/index.php/student/view-placement-papers
    - Views:
        1. placementOfficer1/view-placement-papers.blade.php
        
- Upload Placement Papers (Placement Officer)
    - Controller: PlacementPaperController
    - URL: http://guarded-sierra-57737.herokuapp.com/index.php/student/upload-placement-papers
    - Views:
        1. placementOfficer1/upload-placement-papers.blade.php

### Harshil Patel
- Student Registration (Designing)
    - URL: http://guarded-sierra-57737.herokuapp.com/register
    
    - Views:
        1. register.blade.php
        
    - Learning:
        1. How to use different Bootstrap components.
    
- Update Profile (Designing)
    - URL: http://guarded-sierra-57737.herokuapp.com/student/edit
    
    - Views:
        1. edit.blade.php

    - Learning:
        1. How to use different Bootstrap components.
        
- Manage Placement Officer (Admin)
    - Description:
        Admin can manage Placement Officer. He/She can add new placement officer, update existing placement officer, delete placement officer.
        
    - URL: http://guarded-sierra-57737.herokuapp.com/admin/placement-officers
        
    - Controller:
        PlacementOfficerController
        
    - Views:
        1. index.php
        2. create.php
        3. edit.php
        
    - Learning:
        1. Learned how to use laravel Pagination.
        2. How to use Faker library with factory.
        3. Learned how to use DatabaseSeeder.
   
- Manage Job Posting (Placement Officer)
    - Description:
        Placement Officer can manage Job Postings. He/She can add new job posting, update existing job posting, delete job posting.
    
    - URL: http://guarded-sierra-57737.herokuapp.com/placement-officer/job-postings
    
    - Controller: JobPostingController
    
    - Views:
        1. index.php
        2. create.php
        3. edit.php
        
    - Learning:
        1. Learned how to use laravel Pagination.
        2. How to use Faker library with factory.
        3. How to create one to many relationship.
    
- Manage FAQ Portal (Admin)
    - Description:
        Admin can manage FAQs. He/She can add new FAQ, update existing FAQ, delete FAQ.
    
    - URL: http://guarded-sierra-57737.herokuapp.com/admin1/faqs
    
    - Controller: FAQController
    
    - Views:
        1. index.php
        2. create.php
        3. edit.php
        
    - Learning:
        1. Learned how to use laravel Pagination.
        2. How to use Faker library with factory.
    
- Header Footer (Admin, Placement Officer, Student)
    - URL:
        http://guarded-sierra-57737.herokuapp.com/
    
    - Learning:
        1. How to use different Bootstrap components.
    
- Deployment
    - Description:
        Deployed project on Heroku.
        
    - URL: http://guarded-sierra-57737.herokuapp.com/
        
    - Learning:
        1. How to deploy Laravel application on Heroku.
        2. How to use ClearDB MySQL.
        3. How to use MySQL Workbench.

### Nirmit Patel
- Login,Register and Forgot Password (Full functionallity with authentication)
    -URL :
        http://guarded-sierra-57737.herokuapp.com/login
    -Description:
        New student can register into the system and he/she will get the verify email link. If the user forgets the passwords they will get the email link in which they can reset their password.
    -Views
        1. login.blade.php
        2. register.blade.php
	    3. verify.blade.php
	    4. email.blade.php
	    5. app.blade.php
	    6. confirm.blade.php
	    7. reset.blade.php
    
    -Controller
        1. HomeController.php
        2. ConfirmPassword.php
        3. ForgotPassword.php
        4. LoginController.php
        5. RegisterController.php
        6. ResetPassword.php
        7. VerificationController.php
        8. Kernel.php
      
     -Model
        1. user.php
        
     -MiddleWare
        1. AdminMiddleWare.php

- List of Job Openings (Student)
    -Description:
        Details of the available job will be displayed with their deadlines to apply for the post.
        
    -URL:
        http://guarded-sierra-57737.herokuapp.com/student/view-job-postings
        
    -Views :
        1. view-job-postings.blade.php
        
    -Controller :
        1. jobPostingsController.php
      
    -Model
        1. job_postings.php
        
- Students List (Placement Officer)
    -Description:
        Details of the registered students will be displayed with their GPA's.
        
    -URL:
        http://guarded-sierra-57737.herokuapp.com/po/view-student-list
        
    -Views :
        1. view-student-details.blade.php
        
    -Controller :
        1. StudentDetailController.php
      
    -Model
        1. StudentList.php
 - Learning:
        1. How to work on the framework(Laravel).
        2. How to use the inbuilt funcionallity and classes provided by the frameworks.
        3. How to use github.
### Preksha Patel
- Job Description (Student)
    - Controller: JobDetailController.php
    - URL: http://guarded-sierra-57737.herokuapp.com/job_detail/{id}
    - Views:
        1. student/view-job-details.blade.php
        
- View Student Details(Placement Officer)
    - Controller: StudentDetailController.php
    - URL: http://guarded-sierra-57737.herokuapp.com/student_details/{id}
    - Views:
        1. placementOfficer1/view-student-details.blade.php
      
- About Us (User)
    - URL: http://guarded-sierra-57737.herokuapp.com/about-us
    - Views:
        1. student/about-us.blade.php
        
- Contact Us (User)
    - Controller: ContactUs.php
    - URL: http://guarded-sierra-57737.herokuapp.com/contact-us
    - Views:
        1. student/contact-us.blade.php


