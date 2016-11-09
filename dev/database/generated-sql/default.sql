
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(64) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `username` (`username`(8))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user_role
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role`
(
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `name` (`name`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user_user_role
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_user_role`;

CREATE TABLE `user_user_role`
(
    `user_id` int(10) unsigned NOT NULL,
    `user_role_id` int(10) unsigned NOT NULL,
    INDEX `user_id` (`user_id`),
    INDEX `user_role_id` (`user_role_id`),
    CONSTRAINT `user_user_role_ibfk_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`),
    CONSTRAINT `user_user_role_ibfk_2`
        FOREIGN KEY (`user_role_id`)
        REFERENCES `user_role` (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
