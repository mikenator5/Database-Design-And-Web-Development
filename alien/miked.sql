INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) VALUES (NULL, 'John', 'Berkley', '23', '03', '1995', 'berkley_yeet@yahoo.com', '985-406-7859', '4592 Bassel Street', 'Houma, Louisiana', 'LA', '70360', 'America');

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) VALUES (NULL, '23', '01', '2005', '1249 Modoc Alley', 'Eagle', 'ID', '83642', 'America', '1', 'n', b'0', b'0', '1');

INSERT INTO `classOneReport` (`IDclassOne`, `inVehicle`, `typeOfVehicle`, `additionalDetails`, `IDreport`) VALUES (NULL, b'0', 'n', 'I saw a light', '1');
