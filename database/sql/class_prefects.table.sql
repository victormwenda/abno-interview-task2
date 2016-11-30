CREATE TABLE `class_prefects` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trashed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`student_id`),
  CONSTRAINT `class_prefects_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1