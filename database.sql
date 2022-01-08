CREATE TABLE akash (
	id int(10) AUTO_INCREMENT PRIMARY KEY not null,
  first varchar(50) not null,
  last varchar(50) not null,
 email varchar(50) not null,
  password varchar(50) not null,
 address varchar(100) not null,
  contact bigint(10) not null,
 city varchar(10) not null,
 state varchar(10) not null,
 );
 INSERT INTO akash (first, last, email, password, address, contact, city, state) VALUES ('akash', 'gaikwad', 'akg@gmail.com', 'asd', 'asd123', '1234567890', 'pune', 'Maharashtra')
             
CREATE TABLE `akash` (
`id` int(12) AUTO_INCREMENT PRIMARY KEY not null
,`first` varchar(10)
,`last` varchar(35)
,`email` varchar(10)
,`password` varchar(40)
,`address` varchar(100)
,`contact` bigint(10)
,`city` varchar(10)
,`state` varchar(10)

);