SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `ggk_site` ;
CREATE SCHEMA IF NOT EXISTS `ggk_site` DEFAULT CHARACTER SET latin1 ;
USE `ggk_site` ;

-- -----------------------------------------------------
-- Table `ggk_site`.`bet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`bet` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`bet` (
  `bet_id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
  `parent_id` INT(11) NOT NULL ,
  `team_size` INT(11) NOT NULL DEFAULT '1' ,
  `bet_type_id` INT(11) NOT NULL ,
  `scoring_type_id` INT(11) NOT NULL ,
  `event_id` BIGINT(20) NOT NULL ,
  `wager` INT(11) NOT NULL ,
  `holes_included` VARCHAR(50) NOT NULL DEFAULT '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1' ,
  `status` INT(1) NULL DEFAULT '1' ,
  PRIMARY KEY (`bet_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 153
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`bet_round`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`bet_round` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`bet_round` (
  `bet_round_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `bet_id` INT(11) NOT NULL ,
  `group_id` INT(11) NOT NULL ,
  `player_id` INT(11) NOT NULL ,
  `bet_hcp` VARCHAR(50) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0' ,
  `bet_net` VARCHAR(50) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0' ,
  PRIMARY KEY (`bet_round_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 315
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ggk_site`.`bet_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`bet_type` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`bet_type` (
  `bet_type_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `bet_name` VARCHAR(100) NULL DEFAULT NULL ,
  `status` INT(1) NULL DEFAULT NULL COMMENT '0=OFF, 1=ON' ,
  PRIMARY KEY (`bet_type_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`course` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`course` (
  `CourseName` VARCHAR(128) NULL DEFAULT NULL ,
  `StreetAddress` VARCHAR(128) NULL DEFAULT NULL ,
  `City` VARCHAR(128) NULL DEFAULT NULL ,
  `StateorRegion` VARCHAR(128) NULL DEFAULT NULL ,
  `Zip` VARCHAR(16) NULL DEFAULT NULL ,
  `County` VARCHAR(128) NULL DEFAULT NULL ,
  `PhoneNumber` VARCHAR(128) NULL DEFAULT NULL ,
  `FaxNumber` VARCHAR(128) NULL DEFAULT NULL ,
  `URL` VARCHAR(128) NULL DEFAULT NULL ,
  `TotalHoles` VARCHAR(64) NULL DEFAULT NULL ,
  `architects` VARCHAR(256) NULL DEFAULT NULL ,
  `YearBuiltFounded` VARCHAR(128) NULL DEFAULT NULL ,
  `StatusPublicPrivateResort` VARCHAR(128) NULL DEFAULT NULL ,
  `GuestPolicy` VARCHAR(128) NULL DEFAULT NULL ,
  `EmailAddress` VARCHAR(128) NULL DEFAULT NULL ,
  `TeeNumber` INT(11) NULL DEFAULT NULL ,
  `teename` VARCHAR(64) NULL DEFAULT NULL ,
  `Par` INT(11) NOT NULL ,
  `Holes` INT(11) NOT NULL ,
  `Rating` FLOAT NOT NULL ,
  `Slope` INT(11) NOT NULL ,
  `Par_1` INT(11) NOT NULL ,
  `Yards_1` INT(11) NOT NULL ,
  `Hdcp_1` INT(11) NOT NULL DEFAULT '0' ,
  `Par_2` INT(11) NOT NULL ,
  `Yards_2` INT(11) NOT NULL ,
  `Hdcp_2` INT(11) NOT NULL DEFAULT '0' ,
  `Par_3` INT(11) NOT NULL ,
  `Yards_3` INT(11) NOT NULL ,
  `Hdcp_3` INT(11) NOT NULL DEFAULT '0' ,
  `Par_4` INT(11) NOT NULL ,
  `Yards_4` INT(11) NOT NULL ,
  `Hdcp_4` INT(11) NOT NULL DEFAULT '0' ,
  `Par_5` INT(11) NOT NULL ,
  `Yards_5` INT(11) NOT NULL ,
  `Hdcp_5` INT(11) NOT NULL DEFAULT '0' ,
  `Par_6` INT(11) NOT NULL ,
  `Yards_6` INT(11) NOT NULL ,
  `Hdcp_6` INT(11) NOT NULL DEFAULT '0' ,
  `Par_7` INT(11) NOT NULL ,
  `Yards_7` INT(11) NOT NULL ,
  `Hdcp_7` INT(11) NOT NULL DEFAULT '0' ,
  `Par_8` INT(11) NOT NULL ,
  `Yards_8` INT(11) NOT NULL ,
  `Hdcp_8` INT(11) NOT NULL DEFAULT '0' ,
  `Par_9` INT(11) NOT NULL ,
  `Yards_9` INT(11) NOT NULL ,
  `Hdcp_9` INT(11) NOT NULL DEFAULT '0' ,
  `Tot_out_par` INT(11) NULL DEFAULT NULL ,
  `Tot_out_yards` INT(11) NULL DEFAULT NULL ,
  `Par_10` INT(11) NOT NULL ,
  `Yards_10` INT(11) NOT NULL ,
  `Hdcp_10` INT(11) NOT NULL DEFAULT '0' ,
  `Par_11` INT(11) NOT NULL ,
  `Yards_11` INT(11) NOT NULL ,
  `Hdcp_11` INT(11) NOT NULL DEFAULT '0' ,
  `Par_12` INT(11) NOT NULL ,
  `Yards_12` INT(11) NOT NULL ,
  `Hdcp_12` INT(11) NOT NULL DEFAULT '0' ,
  `Par_13` INT(11) NOT NULL ,
  `Yards_13` INT(11) NOT NULL ,
  `Hdcp_13` INT(11) NOT NULL DEFAULT '0' ,
  `Par_14` INT(11) NOT NULL ,
  `Yards_14` INT(11) NOT NULL ,
  `Hdcp_14` INT(11) NOT NULL DEFAULT '0' ,
  `Par_15` INT(11) NOT NULL ,
  `Yards_15` INT(11) NOT NULL ,
  `Hdcp_15` INT(11) NOT NULL DEFAULT '0' ,
  `Par_16` INT(11) NOT NULL ,
  `Yards_16` INT(11) NOT NULL ,
  `Hdcp_16` INT(11) NOT NULL DEFAULT '0' ,
  `Par_17` INT(11) NOT NULL ,
  `Yards_17` INT(11) NOT NULL ,
  `Hdcp_17` INT(11) NOT NULL DEFAULT '0' ,
  `Par_18` INT(11) NOT NULL ,
  `Yards_18` INT(11) NOT NULL ,
  `Hdcp_18` INT(11) NOT NULL DEFAULT '0' ,
  `Tot_in_par` INT(11) NULL DEFAULT NULL ,
  `Tot_in_yards` INT(11) NULL DEFAULT NULL ,
  `Length` INT(11) NOT NULL ,
  `tees_id` VARCHAR(64) NOT NULL ,
  `course_id` VARCHAR(64) NOT NULL ,
  `latitude` DOUBLE NULL DEFAULT '0' ,
  `longitude` DOUBLE NULL DEFAULT '0' ,
  PRIMARY KEY (`tees_id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`event`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`event` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`event` (
  `event_id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
  `player_id` INT(11) NOT NULL ,
  `event_name` VARCHAR(100) NOT NULL DEFAULT '' ,
  `event_date` DATETIME NOT NULL ,
  `start_hole` INT(2) NOT NULL ,
  `status` INT(2) NULL DEFAULT '1' ,
  `course_id` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`event_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 307
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`player`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`player` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`player` (
  `player_id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
  `first` VARCHAR(100) NULL DEFAULT NULL ,
  `last` VARCHAR(100) NULL DEFAULT NULL ,
  `email` VARCHAR(150) NULL DEFAULT NULL ,
  `password` VARCHAR(100) NULL DEFAULT NULL ,
  `gender` CHAR(1) NULL DEFAULT NULL COMMENT ' /* comment truncated */ /*M-Male F-Female*/' ,
  `handicap` FLOAT NULL DEFAULT NULL ,
  `usga_index` VARCHAR(45) NULL DEFAULT NULL ,
  `is_user` INT(1) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`player_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 222
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`player_course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`player_course` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`player_course` (
  `player_id` INT(11) NOT NULL ,
  `course_id` VARCHAR(10) NOT NULL ,
  `log_time` DATETIME NOT NULL ,
  PRIMARY KEY (`player_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ggk_site`.`round`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`round` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`round` (
  `round_id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
  `event_id` INT(11) NOT NULL ,
  `tees_id` VARCHAR(20) NOT NULL ,
  `player_id` BIGINT(20) NOT NULL ,
  `holes_score` VARCHAR(50) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0' ,
  `holes_hcp` VARCHAR(50) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0' ,
  `rating` FLOAT NULL DEFAULT '0' ,
  `slope` INT(11) NULL DEFAULT '0' ,
  `total_score` INT(11) NULL DEFAULT '0' ,
  `round_hcp` FLOAT NULL DEFAULT '0' ,
  `bet_hcp` INT(11) NOT NULL ,
  `saved` INT(1) NULL DEFAULT '0' COMMENT ' /* comment truncated */ /*1-Yes 2-No*/' ,
  PRIMARY KEY (`round_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 619
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ggk_site`.`scoring_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ggk_site`.`scoring_type` ;

CREATE  TABLE IF NOT EXISTS `ggk_site`.`scoring_type` (
  `scoring_type_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `scoring_name` VARCHAR(10) NULL DEFAULT NULL ,
  PRIMARY KEY (`scoring_type_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
