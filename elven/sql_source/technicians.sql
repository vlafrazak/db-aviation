CREATE TABLE technicians(
	Tech_Code INT 			NOT NULL,
PRIMARY KEY (Tech_Code),
FOREIGN KEY (Tech_Code) REFERENCES employees(Emp_Code) ON DELETE CASCADE
);