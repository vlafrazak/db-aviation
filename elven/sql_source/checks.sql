CREATE TABLE checks(
	Registration_Number VARCHAR(20)		NOT NULL,
	Test_Number			INT UNSIGNED	NOT NULL,
	Emp_Code			INT 			NOT NULL,
	Check_ID			INT UNSIGNED	NOT NULL AUTO_INCREMENT,
	Check_Duration		TIME			NOT NULL,
	Check_Score			DECIMAL(3,0) 	NOT NULL,
PRIMARY KEY (Check_ID),
UNIQUE(Registration_Number,Test_Number,Emp_Code),
FOREIGN KEY (Registration_Number) REFERENCES aircraft(Registration_Number),
FOREIGN KEY (Test_Number) REFERENCES faa_test(Test_Number) ON DELETE CASCADE,
FOREIGN KEY (Emp_Code) REFERENCES technicians(Tech_Code),
CHECK(
	NOT EXISTS(
		SELECT *
		FROM faa_test T, checks C
		WHERE T.Test_Number=C.Test_Number AND C.Check_Score>T.Max_Score))
);