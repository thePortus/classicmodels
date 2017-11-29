select
	`classicmodels`.`employees`.`employeeNumber` AS `employeeNumber`,
    `classicmodels`.`employees`.`lastName` AS `lastName`,
    `classicmodels`.`employees`.`firstName` AS `firstName`,
    `classicmodels`.`employees`.`extension` AS `extension`,
    `classicmodels`.`employees`.`email` AS `email`,
    `classicmodels`.`employees`.`officeCode` AS `officeCode`,
    `employeeBosses`.`bossName` AS `bossName`,
    `classicmodels`.`employees`.`jobTitle` AS `jobTitle`
from (`classicmodels`.`employees`
	join (select
		`classicmodels`.`employees`.`employeeNumber` AS `employeeNumber`,
        concat(`bosses`.`firstName`,' ',`bosses`.`lastName`) AS `bossName` from (
			`classicmodels`.`employees` join `classicmodels`.`employees` `bosses` on((`classicmodels`.`employees`.`reportsTo` = `bosses`.`employeeNumber`)))) `employeeBosses` on((`classicmodels`.`employees`.`employeeNumber` = `employeeBosses`.`employeeNumber`)))
