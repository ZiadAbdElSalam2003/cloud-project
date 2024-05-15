-- Create the team table
CREATE TABLE team (
    name VARCHAR(255) NOT NULL,
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    age INT NOT NULL,
    cgpa DECIMAL(3,2) NOT NULL
);

-- Insert data for 5 students
INSERT INTO team (name, id, age, cgpa) VALUES
('ziad abd el salam', '22010103',  21, 3.6),
('mohamed eslam' ,'22010213',  20, 3.6),
('mohamed abdelsamed','22011479',  20, 3.6),
('omar ebrahim saad', '22010155', 20, 3.6),
('ahmed nasr','22010039',  20, 3.6);