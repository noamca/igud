ALTER TABLE `תחרויות` CHANGE `קוד תחרות` `code` INT(11) NOT NULL AUTO_INCREMENT, CHANGE `שם התחרות` `name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `מיקום התחרות` `position` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `תאריך התחרות` `date` DATETIME NULL DEFAULT NULL, CHANGE `עיתונות` `עיתונות` TINYINT(1) NULL DEFAULT NULL, CHANGE `מס תחרות נורמלי` `מס תחרות נורמלי` INT(11) NULL DEFAULT NULL, CHANGE `לאינטרנט` `internet_yn` TINYINT(1) NULL DEFAULT NULL, CHANGE `רישום` `register_yn` TINYINT(1) NULL DEFAULT NULL, CHANGE `הערות לאינטרנט` `remarks` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `אנגלית` `english_yn` TINYINT(1) NULL DEFAULT NULL, CHANGE `fromdate` `fromdate` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `todate` `todate` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `15` `15` TINYINT(1) NULL DEFAULT NULL, CHANGE `type` `type` INT(11) NULL DEFAULT NULL, CHANGE `en name` `en_name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `PLACE10` `place10` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `eee` `eee` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
RENAME TABLE `תחרויות` TO `competitions_migration`;
INSERT INTO `athletics`.`competitions` ( `name`, `name_eng`, `date_start`, `date_end`, `is_international`, `place`, `age_from`, `age_to`, `gender`, `is_api_open`, `old_id`) 
select name,en_name,fromdate,todate,english_yn,position,'0','0','0',internet_yn,code from competitions_migration order by date  ;


INSERT INTO `athletics`.`professions` ( `name`, `name_eng`, `description`, `measure_type`, `profession_type`, `wind_measure_type`, `ages_range`, `results_format`, `hurdle_default_height`, `default_weight`, `max_lanes`, `qty_runners_on_lane`, `points_culculation_yn`, `points_table_id`, `height_static_additional`, `all_round_yn`, `all_round_profession_ids`, `sort`, `group_id`, `heat_no`, `grandprix_group_desc`, `world_record`, `euro_record`, `mifal_record`, `isr_int_record`, `isr_record`, `world_record_w`, `euro_record_w`, `mifal_record_w`, `isr_int_record_w`, `isr_record_w`, `isr_champ_record`, `isr_champ_record_w`, `isr_champ_record_kadets`, `isr_champ_record_kadets_w`, `control_panel_name`, `macabia_record`, `length`, `heat_no_new_panel`, `multi_fight_sort`, `multi_fight_sort_7`, `short_name_en`, `macabia_record_w`) 



select `ProfName`,'','','','','','','','','','','','','','','','',
`מס למיון`,
`קבוצה`,
`מיקצה`,
`קבוצת גרנד-פרי`,
`שיא עולמי`,
`שיא אירופאי`,
`שיא מפעל`,
`שיא ישראלי בינלאומי`,
`שיא ישראלי`,
`שיא עולמי נ`,
`שיא אירופאי נ`,
`שיא מפעל נ`,
`שיא ישראלי בינלאומי נ`,
`שיא ישראלי נ`,


`שיא אליפות ישראל`,
`שיא אליפות ישראלנ`,
`שיא אליפות ישראל לנוער`,
`שיא אליפות ישראל לנוער נ`,
`שם המקצה הפוך ללו בקרה`,
`שיא מכביה`,
`length`,
`קוד מקצה ללוח החדש`,
`סידור בדף קרב רב`,
`סידור בדף קרב 7`,
`רת באנגלית`,
`שיא מכביה נ`


from `מקצועות האתלטיקה`






