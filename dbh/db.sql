CREATE -- Create a new table called 'Players
 in schema 'SchemaName'
-- Drop the table if it already exists
IF OBJECT_ID('SchemaName.Players
', 'U') IS NOT NULL
DROP TABLE SchemaName.Players

GO
-- Create the table in the specified schema
CREATE TABLE Players

(
    Players
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Src_No varchar(100),
    Name varchar(255),
    Surname varchar(255),
    Gender varchar(6),
    National_ID varchar(255),
    Passport_No varchar(100),
    Email varchar(255),
    Contact varchar(30),
    Physical_Address Text,
    DOB varchar(10),
    Place_of_Birth Text,
);
Create -- Create a new table called '' in schema 'SchemaName'
-- Drop the table if it already exists
IF OBJECT_ID('SchemaName.', 'U') IS NOT NULL
DROP TABLE SchemaName.
GO
-- Create the table in the specified schema
CREATE TABLE Players_Professional_Information
(
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Current_Club varchar(100),
    Province varchar(100),
    Contract_date varchar(10);
    Experiary_date varchar(10);
    Previous_Club varchar(255),
    Previous_Club_Province varchar(255);

);
CREATE TABLE Players_Education_Background
(
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    O_Level varchar(100),
    O_Level_Province varchar(100),
    O_Level_Year varchar(10),
    A_Level varchar(100),
    A_Level_Province varchar(100),
    A_Level_Year varchar(10),
    Tertiary varchar(100),
    Tertiary_Province varchar(100),
    Tertiary_Year varchar(10),
);

CREATE TABLE Sports_Details
(
    Id INT NOT NULL AUTO_INCREMENT, -- primary key column
    Member_No varchar(100),
    FIVB_No INT,
    Highest_Level_Played varchar(50),
    National_Team_Caps INT,
    Provincial_Team_Cap INT,
    Zone_6_Games INT,

    PRIMARY KEY(Id)
);
CREATE TABLE Health_Details
(
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Height varchar(3),
    Weight varchar(3),
    Default_Hand varchar(5),
    Allegies Text
);

CREATE TABLE Coaches

(
    Id INT NOT NULL AUTO INCREMENT PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Profile varchar(100),
    Name varchar(255),
    Surname varchar(255),
    Gender varchar(6),
    National_ID varchar(255),
    Passport_No varchar(100),
    Email varchar(255),
    Contact varchar(30),
    Physical_Address Text,
    DOB varchar(10),
    Place_of_Birth Text,
);
CREATE TABLE Coache_Sporting
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Current_Club varchar(255),
    Province varchar(255),
    Coaching_position varchar(255),
    Previous_Club varchar(255),
    Previous_Club_Province varchar(255),
    Previous_coaching_position varchar(255)
)
CREATE TABLE Institutes_coached
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    School varchar(255),
    School_type varchar(255),
    Province varchar(255),
    Year varchar(30)
)
CREATE TABLE Provincial_Team_Assignment
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Assignment varchar(255),
    Type_of_School varchar(255),
    Province varchar(255),
    Year varchar(255)
)
CREATE TABLE National_Team_Assignment
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Type varchar(100),
    Province varchar(255),
    Year varchar(30)
)
CREATE TABLE Coaching_Qualification
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Qualification varchar(255),
    Type varchar(100),
    Level varchar(100),
    Date_certified varchar(100),

)
CREATE TABLE Last_Certified
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Date_certified varchar(100),
    Grade varchar(30),
    Course_Name varchar(30),
    Instructor varchar(255)

)
CREATE TABLE Coaches_Certificates
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Desciption Text,
    File_path varchar(255)
)
CREATE TABLE admins
(
    INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255),
    Surname varchar(255),
    Email text,
    Position varchar(100)

)
CREATE TABLE Members

(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Profile TEXT,
    Name varchar(255),
    Surname varchar(255),
    Gender varchar(6),
    National_ID varchar(255),
    Passport_No varchar(100),
    Email varchar(255),
    Contact varchar(30),
    Physical_Address Text
);
CREATE TABLE Adminstrators

(
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    Member_No varchar(100),
    Profile TEXT,
    Name varchar(255),
    Surname varchar(255),
    Gender varchar(6),
    National_ID varchar(255),
    Passport_No varchar(100),
    Email varchar(255),
    Contact varchar(30),
    Physical_Address Text
);
CREATE TABLE admin_work_details
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Current_Position varchar(255),
    Province varchar(255),
    Organization varchar(255),
    Telephone varchar(255),
    Position_period INT,
    Tenure varchar(255)
)
CREATE TABLE appointments
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Appointment varchar(255),
    Type varchar(100),
    Province varchar(255),
)
CREATE TABLE Admin_Certificates
(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Member_No varchar(100),
    Desciption Text,
    File_path varchar(255)
)