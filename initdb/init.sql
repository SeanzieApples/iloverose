CREATE TABLE IF NOT EXISTS reasons (reasons text NOT NULL);
CREATE TEMPORARY TABLE temp_table LIKE reasons;
LOAD DATA LOCAL INFILE '/initdb/random.txt' IGNORE INTO TABLE reasons FIELDS TERMINATED by'\n' (reasons);
