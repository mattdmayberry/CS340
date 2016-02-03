
--
-- Table structure for table `customers`
--

CREATE TABLE customers (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  phone VARCHAR(45) NOT NULL,
  street VARCHAR(45) NOT NULL,
  city VARCHAR(45) NOT NULL,
  state VARCHAR(2) NOT NULL,
  zip VARCHAR(5),
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `utility_tariffs`
--

CREATE TABLE utility_tariffs (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  tariff VARCHAR(45) NOT NULL,
  utility VARCHAR(45) NOT NULL,
  rate VARCHAR(45) NOT NULL,
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `components`
--

CREATE TABLE components (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  model VARCHAR(45) NOT NULL,
  part_num VARCHAR(45) NOT NULL,
  type VARCHAR(45) NOT NULL,
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `installers`
--

CREATE TABLE installers (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  phone VARCHAR(45) NOT NULL,
  street VARCHAR(45) NOT NULL,
  city VARCHAR(45) NOT NULL,
  state VARCHAR(2) NOT NULL,
  zip VARCHAR(5),
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `systems`
--

CREATE TABLE systems (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  street VARCHAR(45) NOT NULL,
  city VARCHAR(45) NOT NULL,
  state VARCHAR(2) NOT NULL,
  zip VARCHAR(5) NOT NULL,
  c_id VARCHAR(5) NOT NULL,
  i_id VARCHAR(5) NOT NULL,
  pan_id VARCHAR(5) NOT NULL,
  inv_id VARCHAR(5) NOT NULL,
  rac_id VARCHAR(5) NOT NULL,
  tar_id VARCHAR(5) NOT NULL,
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump data into `customers`
--

SET AUTOCOMMIT=0;
INSERT INTO customers VALUES 
(1,'Cam','Newton','555-333-4444','1 Touchdown Zone','Charlotte','NC','28201'),
(2,'Colin','Kaepernick','415-555-3333','12 Niners Way','San Francisco','CA','94101'),
(3,'Tom','Brady','232-000-9999','Lilly Ct','Boston','MA','02108'),
(4,'Eli','Manning','777-555-3333','1 Big Giant St','New York','NY','10001'),
(5,'Andrew','Luck','888-555-3333','2 Wild Horse Ln','Indianapolis','IN','46201'),
(6,'Peyton','Manning','303-555-3333','34 Mile High Ave','Denver','CO','80123');
COMMIT;

--
-- Dump data into `utility_tariffs`
--

SET AUTOCOMMIT=0;
INSERT INTO utility-tariffs VALUES 
(1,'Rate TD','Duke Energy','$0.05 / kWh'),
(2,'E1','Pacific Gas & Electric','$0.25 / kWh'),
(3,'R-2','NSTAR','$0.17 / kWh'),
(4,'RS','Indianapolis Power & Light Company','$0.09 / kWh'),
(5,'R','Xcel Energy','$0.10 / kWh');
COMMIT;

--
-- Dump data into `installers`
--

SET AUTOCOMMIT=0;
INSERT INTO installers VALUES 
(1,'4Ever Electric','619-555-3333','12 LogN2 Ln','San Francisco', 'CA', '94101'),
(2,'AC/DC Electric','333-555-3333','15 Volta Ct','Boston', 'MA', '02108'),
(3,'Amped Electric','222-555-3333','99 Voc','Charlotte', 'NC', '28201'),
(4,'Olms Electric','777-555-3333','1 V=IR2','New York', 'NY', '10001'),
(5,'4Ever Electric','619-555-3333','12 Ebita Ln','Indianapolis', 'IN', '46201'),
(6,'Mile High Electric','303-555-3333','5280 Ft Terrace','Denver', 'CO', '80123');
COMMIT;

--
-- Dump data into `components`
--

SET AUTOCOMMIT=0;
INSERT INTO components VALUES 
(1,'SPR-327','100234','Panel'),
(2,'SPR-345','100235','Panel'),
(3,'SB-8US','200123','Inverter'),
(4,'ACPV-300','200225','Inverter'),
(5,'INVM','300111','Racking'),
(6,'SM','300112','Racking');
COMMIT;

--
-- Dump data into `systems`
--

SET AUTOCOMMIT=0;
INSERT INTO systems VALUES 
(1,'1 Touchdown Zone','Charlotte','NC','28201','1','3','2','4','5','1'),
(2,'12 Niners Way','San Francisco','CA','94101','2','1','2','4','5','2'),
(3,'Lilly Ct','Boston','MA','02108','3','2','1','3','6','3'),
(4,'34 Mile High Ave','Denver','CO','80123','6','6','2','4','5','5');
COMMIT;