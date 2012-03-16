CREATE TABLE employees(
	Emp_Code 		INT UNSIGNED	NOT NULL AUTO_INCREMENT,
	SSN 			INT UNSIGNED 	NOT NULL UNIQUE,
	UMN 			INT UNSIGNED	NOT NULL UNIQUE,
	First_Name 		TEXT 			NOT NULL,
	Surname 		TEXT 			NOT NULL,
	Street_Name 	TEXT,
	Street_Number 	TEXT,
	Postal_Code 	INT UNSIGNED,
	Salary 			FLOAT UNSIGNED,
PRIMARY KEY(Emp_Code),
CHECK (Postal_Code<100000 AND Postal_Code>9999)/*CHECK constraints*/
);