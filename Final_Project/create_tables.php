--
-- Table structure for table `customers`
--

CREATE TABLE test_table (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  billing_address VARCHAR(45) NOT NULL,
  phone VARCHAR(45) NOT NULL,
  system_qty VARCHAR(45),
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
-- Table structure for table `systems`
--

CREATE TABLE systems (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  c_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  c_first_name VARCHAR(45) NOT NULL,
  c_last_name VARCHAR(45) NOT NULL,
  address VARCHAR(45) NOT NULL,
  panel VARCHAR(45) NOT NULL,
  inverter VARCHAR(45) NOT NULL,
  racking VARCHAR(45) NOT NULL,
  tariff VARCHAR(45) NOT NULL,
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
  system_qty VARCHAR(45),
  address VARCHAR(45) NOT NULL,
  phone VARCHAR(45) NOT NULL,
  PRIMARY KEY  (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;