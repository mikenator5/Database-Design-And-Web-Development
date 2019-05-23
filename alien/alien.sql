CREATE DATABASE IF NOT EXISTS alien;

USE alien;

CREATE TABLE IF NOT EXISTS personalInformation (
    IDpersonal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(35) NOT NULL,
    lname VARCHAR(35) NOT NULL,
    dayBirth INT(2),
    monthBirth INT(2),
    yearBirth INT(4),
    email VARCHAR(255),
    phone VARCHAR(25),
    streetAddress VARCHAR(60),
    cityAddress VARCHAR(30),
    stateAddress VARCHAR(2),
    zip VARCHAR(10),
    country VARCHAR(30)
);
/* AlexP, MikeD, ConnorH, CalebP */
CREATE TABLE IF NOT EXISTS interaction (
    IDinteraction INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    /* Location */
    cityInteraction VARCHAR(30),
    stateInteraction VARCHAR(30),
    countryInteraction VARCHAR(30) NOT NULL,
    dayInteraction INT(2),
    monthInteraction INT(2),
    yearInteraction INT(4),

    /* Questions */
    typeOfInteraction VARCHAR(30), /* use dropdown */
    numberOfAliens INT(2),
    colorAliens VARCHAR(10), /* Color Wheel */
    onDrugs VARCHAR(3),  /* YES or NO */
    lengthEncounter VARCHAR(20), /* How long gone? */

    /* Describe Encounter */
    descriptionUFO VARCHAR(255),
    descriptionInteraction TEXT NOT NULL,
    peopleInvolved VARCHAR(255),
    hostility VARCHAR(8) NOT NULL, /* Dropdown with options Hostile, Neutral, Friendly */
    sideEffects VARCHAR(255),
    additionalDetails TEXT,
    

    FOREIGN KEY (IDpersonal) REFERENCES personalInformation(IDpersonal) /* Get info from first table */
);
