CREATE TABLE aircraft(
	Registration_Number VARCHAR(20) 			NOT NULL,
	Air_Carrier 		TEXT,
	Construction_Date	DATE			NOT NULL,
	Model_Code			INT UNSIGNED	NOT NULL,
PRIMARY KEY (Registration_Number),
FOREIGN KEY (Model_Code) REFERENCES aircraft_model(Model_Code) ON DELETE CASCADE
);