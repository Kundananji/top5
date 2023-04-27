CREATE TABLE `user` (`userId` INT NOT NULL AUTO_INCREMENT ,
 `firstName` VARCHAR(50) NOT NULL , 
 `lastName` VARCHAR(50) NOT NULL , 
 `otherNames` VARCHAR(50) NULL , 
 `emailAddress` VARCHAR(100) NOT NULL , 
 `password` VARCHAR(100) NOT NULL , 
 PRIMARY KEY (`userId`)) ENGINE = InnoDB;


 Describe  `user`;

