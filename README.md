
# CodeIgniter v.3/ Task




## Documentation

## Make a DB tables
1)
CREATE TABLE school (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

2)
CREATE TABLE class (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10) NOT NULL
);

3)
CREATE TABLE student_grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student VARCHAR(255) NOT NULL,
    first_semester_average DECIMAL(5,2),
    second_semester_average DECIMAL(5,2),
    annual_average DECIMAL(5,2),
    school_id INT,
    class_id INT,
    FOREIGN KEY (school_id) REFERENCES school(id),
    FOREIGN KEY (class_id) REFERENCES class(id)
);

## Run Command
To start the local PHP server, run: 
    php -S localhost:8000

 ## URL link
To run seed work in the project, visit:
    http://localhost:8000/run_seeder


To view the student task grid, visit:
http://localhost:8000/student