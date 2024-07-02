<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
$dbo = new Database();

$c = "create table student_details
(
 id int auto_increment primary key,
 roll_no varchar(20) unique,
 name varchar(50)
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>student_details created");
} catch (PDOException $o) {
    echo("<br>student_details not created ");
}

$c = "create table course_details
(
 id int auto_increment primary key,
 code varchar(20) unique,
 title varchar(50),
 credit int
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>course_details created");
} catch (PDOException $o) {
    echo("<br>course_details not created ");
}

$c = "create table faculty_details
(
 id int auto_increment primary key,
 user_name varchar(20) unique,
 name varchar(50),
 password varchar(50)
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>faculty_details created");
} catch (PDOException $o) {
    echo("<br>faculty_details not created ");
}

$c = "create table session_details
(
 id int auto_increment primary key,
 year int,
 term varchar(50),
 unique (year,term)
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>session_details created");
} catch (PDOException $o) {
    echo("<br>session_details not created ");
}

$c = "create table course_registration
(
 student_id int,
 course_id int,
 session_id int,
 primary key (student_id,course_id,session_id)
)"; 
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>course_registration created");
} catch (PDOException $o) {
    echo("<br>course_registration not created ");
}

$c = "create table course_allotment
(
 faculty_id int,
 course_id int,
 session_id int,
 primary key (faculty_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>course_allotment created");
} catch (PDOException $o) {
    echo("<br>course_allotment not created ");
}

$c = "create table attendance_details
(
 faculty_id int,
 course_id int,
 session_id int,
 student_id int,
 on_date date,
 status varchar(10),
 primary key (faculty_id,course_id,session_id,on_date)
)";
$s=$dbo->conn->prepare($c);
try 
{
    $s->execute();
    echo("<br>attendance_details created");
} catch (PDOException $o) {
    echo("<br>attendance_details not created ");
}

$c = "insert into student_details
(id,roll_no,name)
values
(1,'CSB21001','DERYK CHEED'),
(2,'CSB21002','ESSY JUMA'),
(3,'CSB21003','EVANS RUPIN'),
(4,'CSB21004','DEBS RICHARD'),
(5,'CSB21005','SAMMY TONNY'),
(6,'CSB21006','LINET SHIKAI'),
(7,'CSB21007','EZRA CHILOBA'),
(8,'CSB21008','TESSY DIVA'),
(9,'CSB21009','TRISHA BASHIR'),
(10,'CSB21010','SAID MARO'),
(11,'CSB21011','PETER TUSH'),
(12,'CSB21012','FATUMA GEDI'),
(13,'CSM21001','JOAN SHEBE'),
(14,'CSM21002','SASHA JULLY'),
(15,'CSM21003','REMMY TASH'),
(16,'CSM21004','OSCAR MATHA'),
(17,'CSM21005','DIVOCK ORIGI'),
(18,'CSM21006','HIJAH KHALID'),
(19,'CSM21007','SARAH TOHA'),
(20,'CSM21008','BUTTON SEIF'),
(21,'CSM21009','ERIC BILLY'),
(22,'CSM21010','OMAR SWALE'),
(23,'CSM21011','ABDI GORO'),
(24,'CSM21012','NATHAN JOB')";

$s=$dbo->conn->prepare($c);
try {
    $s->execute();
} catch (PDOException $o) {
    echo("<br>duplicate entry");
}

$c = "insert into faculty_details
(id, user_name, name, password)
values
(1, 'rcb', 'RCB', '123'),
(2, 'dr', 'Deryk Raun', '123'),
(3, 'lh', 'Linda Hendriks', '123'),
(4, 'mj', 'Matano Juma', '123'),
(5, 'ca', 'Chris Abdi', '123'),
(6, 'pl', 'Priscar Latiffah', '123')";
$s=$dbo->conn->prepare($c);
try {
    $s->execute();
} catch (PDOException $o) {
    echo("<br>duplicate entry");
}

$c = "insert into session_details
(id,year,term) 
values
(1,2024,'SPRING SEMESTER'),
(2,2024,'AUTUMN SEMESTER')";
$s=$dbo->conn->prepare($c);
try {
    $s->execute();
} catch (PDOException $o) {
    echo("<br>duplicate entry");
}

$c = "insert into course_details
(id,title,code,credit)
values
(1,'Database Management System lab','CO321',2),
(2,'Pattern Recognition','CO215',3),
(3,'Data Mining & Data Warehousing','CS112',4),
(4,'Artificial Intelligence','CS670',4),
(5,'Theory Of Computation','CO432',3),
(6,'Demystifying Networking','CS673',1)";
$s=$dbo->conn->prepare($c);
try {
    $s->execute();
} catch (PDOException $o) {
    echo("<br>duplicate entry");
}
?>