CREATE TABLE tbl_admins (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    uname varchar(55) NOT NULL,
    pwd varchar(55) NOT NULL
);

CREATE TABLE tbl_students (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    entry_date varchar(55) NOT NULL,
    name varchar(55) NOT NULL,
    stu_id varchar(55) NOT NULL,
    dept varchar(55) NOT NULL,
    room varchar(55) NOT NULL,
    seat varchar(55) NOT NULL,
    expire varchar(55) NOT NULL
);

CREATE TABLE tbl_payments (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    entry_date varchar(55) NOT NULL,
    stu_id varchar(55) NOT NULL,
    payment_from varchar(55) NOT NULL,
    payment_to varchar(55) NOT NULL,
    amount varchar(55) NOT NULL,
    slip_no varchar(55) NOT NULL
);