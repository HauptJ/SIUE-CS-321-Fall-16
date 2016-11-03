-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.0.27-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for Zurg
CREATE DATABASE IF NOT EXISTS `Zurg` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Zurg`;

-- Dumping structure for table Zurg.quiz
CREATE TABLE IF NOT EXISTS `quiz` (
  `QuestionID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `Answer` varchar(5) NOT NULL,
  `ChoiceA` text NOT NULL,
  `ChoiceB` text NOT NULL,
  `ChoiceC` text NOT NULL,
  `ChoiceD` text NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table Zurg.quiz: ~5 rows (approximately)
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` (`QuestionID`, `Question`, `Answer`, `ChoiceA`, `ChoiceB`, `ChoiceC`, `ChoiceD`) VALUES
	(1, 'What is programming?', 'A', 'The action or process of writing computer programs.', 'The process of fixing errors in a program.', 'The action or process of scheduling something.', 'The process of finding errors in a computer program.'),
	(2, 'What is creativity?', 'A', 'The use of the imagination or original ideas, especially in the production of an artistic work.', 'The use of critical thinking and problem solving skills.', 'The ability to transcend traditional ideas, rules, patterns, relationships, or the like, and to create meaningful new ideas, forms, methods, interpretations, etc.; originality, progressiveness, or imagination.', 'The process of finding and resolving of defects that prevent correct operation of computer software or a system.'),
	(3, 'What is computer science?', 'A', 'The study of the principles and use of computers.', 'The study of computing, programming, and computation in correspondence with computer systems. This field of study utilizes theories on how computers work to design, test, and analyze concepts.', 'The process of compuing the required sample size using regression analysis.', 'The study of the history of computers.'),
	(4, 'What is an algorithm?', 'D', 'Another word for Computer Science.', 'A compiled computer program.', 'An error in a computer program.', 'A process or set of rules to be followed in calculations or other problem-solving operations, especially by a computer.'),
	(5, 'What are 5 good steps to follow in regards to problem solving?', 'B', 'Give up', '1.) Identify the problem. 2.) Develope alternatives. 3.) Select the best alternative. 4.) Implement. 5.) Stop if solution worked, if not, repeat process.', '1.) Use Bing to find information. 2.) Use Google to find more information. 3.) Use Yahoo to find even more information. 4.) Analyze the information you found. 5.) Come up with a plan using this information.', '1.) Ask a friend for help. 2.) Go to the library and research the problem you are faced with. 3.) Email your favourite CS professor [He won\'t respond] 4.) Identify the problem. 5.) Implement a plan.\r\n');
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;

-- Dumping structure for table Zurg.users
CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(35) NOT NULL,
  `Password` varchar(20) NOT NULL DEFAULT 'Password',
  `UserType` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Type (Teacher(0), Student(1)) [TINYINT] Defaults to 1 for student',
  `QuizScore` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table Zurg.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`Name`, `Password`, `UserType`, `QuizScore`) VALUES
	('Bill', 'Password', 1, 97),
	('Stud', 'Password', 1, 1),
	('Student', 'Password', 1, 2),
	('Teacher', 'Password', 0, NULL),
	('Zurg', 'Password', 1, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
