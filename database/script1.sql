CREATE DATABASE Welearn1;

USE Welearn1;

  CREATE TABLE Category(
    category_id INT NOT NULL auto_increment,
    category_logo VARCHAR (100) NOT NULL,
    category_name VARCHAR (50) NOT NULL,
    category_salle VARCHAR (20) NOT NULL,
    category_description TEXT NOT NULL,

      PRIMARY KEY(category_id)
  );

  CREATE TABLE Category_sub(
    category_sub_id INT NOT NULL auto_increment,
    category_sub_name VARCHAR (150) NOT NULL,
    category_sub_description TEXT NOT NULL,
    category_id INT NOT NULL,

      PRIMARY KEY(category_sub_id),
      FOREIGN KEY(category_id) REFERENCES Category(category_id)
  );

  CREATE TABLE Information(
    information_id INT NOT NULL auto_increment,
    information_email VARCHAR (150) NOT NULL,
    information_facebook VARCHAR (150) NOT NULL,
    information_twitter VARCHAR (150) NOT NULL,
    information_phone VARCHAR (15) NOT NULL,

      PRIMARY KEY(information_id)
  );

  CREATE TABLE Faq(
    faq_id INT NOT NULL auto_increment,
    faq_question VARCHAR (150) not null,
    faq_answer TEXT not null,

      PRIMARY KEY(faq_id)
  );

  CREATE TABLE About(
    about_id INT NOT NULL auto_increment,
    about_summary VARCHAR (150) NOT NULL,
    about_content TEXT NOT NULL,

      PRIMARY KEY(about_id)
  );

  CREATE TABLE Newsletter(
    newsletter_id INT NOT NULL auto_increment,
    newsletter_email varchar(120) not null,

      PRIMARY KEY(newsletter_id)
  );

  CREATE TABLE Message(
    message_id INT NOT NULL auto_increment,
    message_name VARCHAR (75) NOT NULL,
    message_email VARCHAR (100) NOT NULL,
    message_sujet VARCHAR (100) NOT NULL,
    message_content TEXT NOT NULL,

      PRIMARY KEY(message_id)
  );

  CREATE TABLE User_type(
    user_type_id INT NOT NULL auto_increment,
    user_type_name VARCHAR (50) NOT NULL,
    user_type_description VARCHAR (250) NOT NULL,

      PRIMARY KEY(user_type_id)
  );

  CREATE TABLE User(
    user_id  INT NOT NULL auto_increment,
    user_photo LONGBLOB,
    user_last_name VARCHAR (50) NOT NULL,
    user_first_name VARCHAR (50) NOT NULL,
    user_email VARCHAR (100) NOT NULL,
    user_name VARCHAR (50) NOT NULL,
    user_diplome LONGBLOB,
    user_certificat LONGBLOB,

    user_password VARCHAR (50) NOT NULL,
    user_type_id INT NOT NULL,

      PRIMARY KEY(user_id),
      FOREIGN KEY(user_type_id) REFERENCES User_type(user_type_id)
  );

  CREATE TABLE Term(
    term_id INT NOT NULL auto_increment,
    term_name VARCHAR (100) NOT NULL,
    term_content TEXT NOT NULL,
    user_type_id INT NOT NULL,

      PRIMARY KEY(term_id),
      FOREIGN KEY(user_type_id) REFERENCES User_type(user_type_id)
  );


  CREATE TABLE Cours(
    cours_id INT NOT NULL auto_increment,
    cours_photo LONGBLOB NOT NULL,
    cours_name VARCHAR (100) NOT NULL,
    cours_description TEXT NOT NULL,
    cours_learn_1 VARCHAR (100) NOT NULL,
    cours_learn_2 VARCHAR (100) NOT NULL,
    cours_learn_3 VARCHAR (100) NOT NULL,
    cours_learn_4 VARCHAR (100),
    cours_learn_5 VARCHAR (100),
    cours_objective TEXT NOT NULL,
    cours_curriculum_1 LONGBLOB NOT NULL,

    cours_user_id INT NOT NULL,
    cours_category_id INT NOT NULL,
    cours_category_sub_id INT NOT NULL,

      PRIMARY KEY(cours_id),
      FOREIGN KEY(cours_user_id) REFERENCES User(user_id),
      FOREIGN KEY(cours_category_id) REFERENCES Category(category_id),
      FOREIGN KEY(cours_category_sub_id) REFERENCES Category_sub(category_sub_id)
  );

  CREATE TABLE Comment(
    comment_id INT NOT NULL auto_increment,
    comment_title VARCHAR (50) NOT NULL,
    commment_content TEXT NULL,
    user_id INT NOT NULL,
    cours_id INT NOT NULL,

      PRIMARY KEY(comment_id),
      FOREIGN KEY(user_id) REFERENCES User(user_id),
      FOREIGN KEY(cours_id) REFERENCES Cours(cours_id)
  );
