
create database Welearn;

  use welearn;

    create table category(
      categoryID int not null auto_increment,
      categoryLogo varchar (255) not null,
      categoryName varchar (50) not null,
      categoryDescription text not null,

        primary key(categoryID)
    );

    create table subcategory(
      subcategoryID int not null auto_increment,
      subcategoryName varchar (150) not null,
      subcategoryDescription text not null,
      categoryID int,

        primary key(subcategoryID),
        foreign key(categoryID) references category(categoryID)
      );

    create table contact(
      contactID int not null auto_increment,
      contactEmail varchar (150) not null,
      contactFB varchar (150) not null,
      contactTW varchar (150) not null,
      contactPhone varchar (150) not null,

        primary key(contactID)
    );

    create table faq(
      faqID int not null auto_increment,
      faqQuestion varchar (150) not null,
      faqAnswer varchar (500) not null,

        primary key(faqID)
    );

    create table about(
      aboutID int not null auto_increment,
      about text not null,

        primary key(aboutID)
    );

    create table newsletter(
      newsletterID int not null auto_increment,
      newsletterEmail varchar(100) not null,

        primary key(newsletterID)
    );

    create table message(
      messageID int not null auto_increment,
      name varchar(50) not null,
      email varchar(50) not null,
      sujet varchar(150) not null,
      msg text not null,

        primary key(messageID)
    );

    create table user_type(
      user_typeID int not null auto_increment,
      user_typeName varchar (50) not null,
      user_typeDescription text,

        primary key(user_typeID)
    );

    create table term(
      termID int not null auto_increment,
      termName varchar (150) not null,
      termDescription text not null,
      user_typeID int,

        primary key(termID),
        foreign key(user_typeID) references user_type(user_typeID)
    );

    create table user(
      userID int not null auto_increment,
      userLastName varchar (50) not null,
      userFirstName varchar (50) not null,
      userEmail varchar (50) not null,
      userName varchar (50) not null,
      user_typeID int,
      userPassword varchar (50) not null,

        primary key(userID),
        foreign key(user_typeID) references user_type(user_typeID)
    );


    create table comment(
      commentID int not null auto_increment,
      commentTitle varchar (50) not null,
      commentText text not null,
      userID int,

      primary key(commentID),
      foreign key(userID) references user(userID)

      );