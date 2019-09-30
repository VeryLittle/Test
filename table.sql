CREATE TABLE callback(  
   id INT NOT NULL AUTO_INCREMENT,  
   created DATETIME DEFAULT CURRENT_TIMESTAMP,
   name VARCHAR(30) NOT NULL,  
   email VARCHAR(30) NOT NULL,  
   message text NOT NULL,  
   PRIMARY KEY ( id )  
);