CREATE TABLE aircraft_model(
	Model_Code		INT UNSIGNED	NOT NULL AUTO_INCREMENT,
	Model_Name		VARCHAR(20)		NOT NULL UNIQUE,
	Capacity		INT UNSIGNED 	NOT NULL,
	Weight			FLOAT			NOT NULL,
	Manufacturer 	TEXT			NOT NULL,
PRIMARY KEY (Model_Code)
);