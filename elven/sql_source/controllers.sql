CREATE TABLE controllers(
	Contr_Code 		INT UNSIGNED 	NOT NULL,
	Last_Exam_Date 	DATE,
PRIMARY KEY (Contr_Code),
FOREIGN KEY (Contr_Code) REFERENCES employees(Emp_Code) ON DELETE CASCADE
);