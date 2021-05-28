Fečák,  Nemčík


CREATE TABLE news(
  id int NOT NULL AUTO_INCREMENT,
  heading varchar (50)NOT NULL,
  description varchar(255)NOT NULL,
  imageid int,
    PRIMARY KEY (id)
  );
  
  INSERT INTO news
  (heading,description,imageid)
  VALUES
  ("nadpis1","desc1",1),
  ("nadpis2","desc2",2),
  ("nadpis3","desc3",3);
 
  
    CREATE TABLE image (
    imageid int NOT NULL AUTO_INCREMENT,
    url varchar(255) NOT NULL,
    FOREIGN  KEY(imageid) REFERENCES news(id)
  );
  
  INSERT INTO image (url)
  VALUES 
  ("url1"),
  ("url2"),
  ("url3");

 
  
    CREATE TABLE about (
    id int NOT NULL AUTO_INCREMENT,
    heading varchar (50) NOT NULL,
    description TEXT(500) NOT NULL,  
    PRIMARY KEY(id)
    );
    
    INSERT INTO about
    (heading, description)
    VALUES
    ("nadpis1" , "DESC1"),
    ("nadpis2","desc2");