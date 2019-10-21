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
GO