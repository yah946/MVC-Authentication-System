CREATE DATABASE IF NOT EXISTS talent_hub ;
use talent_hub;
create Table employee(
    id int PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone varchar(15) NOT NULL,
    password varchar(255) NOT NULL,
    role enum('condidate','recruiter') NOT NULL
)
alter table employee
modify role enum('Candidate','Recruiter')