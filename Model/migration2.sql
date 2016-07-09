ALTER TABLE `חשבון אגודה` CHANGE `קוד אגודה` `association_id` INT(11) NULL DEFAULT NULL, CHANGE `פריט` `product_description` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `כמות` `quontity` INT(11) NULL DEFAULT NULL, CHANGE `שולם` `שולם` TINYINT(1) NULL DEFAULT NULL, CHANGE `שולם בכסף` `שולם בכסף` INT(11) NULL DEFAULT NULL, CHANGE `זכות` `credit_amount` INT(11) NULL DEFAULT NULL, CHANGE `תאריך` `created` DATETIME NULL DEFAULT NULL, CHANGE `מחיר` `debit_amount` INT(11) NULL DEFAULT NULL;
INSERT INTO `accountings` ( `entity_type`, `entity_id`, `identity_number`, `description`, `quantity`, `debit_amount`, `credit_amount`, `created`, `user_id`) select 'Association',association_id,'0',product_description,quontity,debit_amount,credit_amount,created,1 from `igud-mdb-data`.`association_account_migration`
ALTER TABLE `כתובת` CHANGE `תז` `identity_number` INT(11) NULL DEFAULT NULL, CHANGE `רחוב` `street` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מס` `block_no` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `עיר` `city` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `כניסה` `entry` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `דירה` `appartment` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מיקוד` `zip` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `E-mail` `email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Status` `status` TINYINT(1) NULL DEFAULT NULL, CHANGE `טלפון` `phone` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `פלאפון` `mobile` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `פקס` `fax` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מיקום` `position` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `שכונה` `neigberhood` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
remane table `כתובת` `addresses` ;

ALTER TABLE `דרגות שיפוט` CHANGE `דרגה` `level_description` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מחיר לשעה` `price_for_hour` INT(11) NULL DEFAULT NULL;
remane table `דרגות שיפוט` `referees_levels` ;
ALTER TABLE `היסטורית שופטים` CHANGE `קוד` `referee_id` INT(11) NOT NULL AUTO_INCREMENT, CHANGE `דרגה` `level` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `אחוז ניכוי מס` `tax_deduction_percent` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `נסיעות` `traffic_pay` INT(11) NULL DEFAULT NULL, CHANGE `תאריך` `date` DATETIME NULL DEFAULT NULL;
remane table `היסטורית שופטים` `referees_payments_migration` ;
update `referees_payments_migration` set identity_number = (SELECT identity_number from referees_migration where old_id = referee_id )

ALTER TABLE `השתלמויות שופטים` CHANGE `קוד שופט` `referee_id` INT(11) NULL DEFAULT NULL, CHANGE `תאריך` `date` DATETIME NULL DEFAULT NULL, CHANGE `מקום` `place` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `סוג השתלמות` `study_type` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מס שעות` `hours_number` INT(11) NULL DEFAULT NULL, CHANGE `אחראי השתלמות` `study_manager` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
remane table `השתלמויות שופטים` `referees_studies` ;
ALTER TABLE `referees_studies` ADD `identity_number` INT NOT NULL AFTER `study_manager`;
update `referees_studies` set identity_number = (SELECT identity_number from referees_migration where old_id = referee_id )



 -- coachers
ALTER TABLE `coachers_migration` CHANGE `laast_name_eng` `last_name_eng` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL; 

INSERT INTO `coachers` (
`id`, `first_name`, `last_name`, `first_name_eng`, `last_name_eng`, 
`birth_date`,  `association_id`,  
`is_active`, `email`,  `gender`, 
`referee_id`, `job_title`, `identity_number`)
 VALUES 
 
 select old_id,first_name,last_name,first_name_eng,last_name_eng ,
 birth_date,association_id,
 is_active,email,gender,
 referee_id, job_title,identity_number
 
 from `igud-mdb-data`.coachers_migration
 









