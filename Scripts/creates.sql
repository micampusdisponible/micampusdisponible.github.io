CREATE TABLE `a9764979_MiCampu`.`area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `a9764979_MiCampu`.`lugar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `area` INT NULL,
  `capacidad` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `area_lugar_idx` (`area` ASC),
  CONSTRAINT `area_lugar`
    FOREIGN KEY (`area`)
    REFERENCES `a9764979_MiCampu`.`area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `a9764979_MiCampu`.`individuales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lugar` INT NULL,
  `estacion` INT NULL,
  `estado` CHAR(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `lugar_individual_idx` (`lugar` ASC),
  CONSTRAINT `lugar_individual`
    FOREIGN KEY (`lugar`)
    REFERENCES `a9764979_MiCampu`.`lugar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `a9764979_MiCampu`.`grupales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lugar` INT NULL,
  `ocupacion` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `lugar_grupla_idx` (`lugar` ASC),
  CONSTRAINT `lugar_grupla`
    FOREIGN KEY (`lugar`)
    REFERENCES `a9764979_MiCampu`.`lugar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

