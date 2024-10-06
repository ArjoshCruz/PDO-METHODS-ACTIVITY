create table Members (
  member_id INT,
  trainer_id INT,
  class_id INT,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  gender VARCHAR(50),
  join_date DATE,
  is_active BOOLEAN 
);

create table Membership_Plans (
  membership_plan_id INT,
  member_id INT,
  plan_name VARCHAR(50),
  date_bought DATE,
  price INT,
  description VARCHAR(50)
);

create table Trainers (
  trainer_id INT,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  gender VARCHAR(50),
  specialization VARCHAR(50),
  phone_number INT
);

create table Class (
  class_id INT,
  trainer_id INT,
  schedule_id INT,
  class_name VARCHAR(50)
);

create table Schedules (
  schedule_id INT,
  room_id INT,
  class_id INT,
  trainer_id INT,
  start_date_time DATE,
  end_date_time DATE
);

create table Facilities (
  facility_id INT,
  facility_name VARCHAR(50),
  description VARCHAR(50),
  location VARCHAR(50)
);

create table Rooms (
  room_id INT,
  facility_id INT,
  room_name VARCHAR(50)
);