CREATE TABLE is_expert_in(
	Tech_Code 		INT				NOT NULL,
	Model_Code		INT UNSIGNED	NOT NULL,
PRIMARY KEY (Tech_Code,Model_Code),
FOREIGN KEY (Tech_Code) REFERENCES technicians(Tech_Code) ON DELETE CASCADE,
FOREIGN KEY (Model_Code) REFERENCES aircraft_model(Model_Code) ON DELETE CASCADE
);