-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2013 at 05:59 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `job_reference` int(100) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `job_description` varchar(50000) NOT NULL,
  `published_date` varchar(20) NOT NULL,
  `expiry_date` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `apply_date` varchar(50) NOT NULL,
  `catogeory` varchar(30) NOT NULL,
  `job_ad_website` varchar(10) NOT NULL,
  PRIMARY KEY (`job_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_reference`, `job_title`, `job_description`, `published_date`, `expiry_date`, `country`, `region`, `apply_date`, `catogeory`, `job_ad_website`) VALUES
(3, 13228, 'web developer', ' www.blomquist-co.se\r\nJob Description\r\n\r\nDigital department needs to be reinforced with a web developer. Within the service, you will work with the production of banners, promotional sites, newsletters and websites. • You will work closely with the others in your group.\r\n\r\n\r\n\r\nQualifications\r\n\r\nAs a person, we see that you are solution-oriented, driven and work well with others. \r\n\r\nRequirements\r\n\r\nHTML5, CSS3, Java Script and LAMP.\r\nUnderstanding of usability and web standards.? Merit\r\nFlash, ActionScript, app development, Drupal, Wordpress and development of social media.\r\n\r\n\r\nJob Scope\r\n\r\nFull-time, Permanent Job \r\n\r\n\r\nMail application to marieb@blomquist-co.se last March 31.', '02/26/2013', '03/31/2013', 'Sweden', 'Sweden', '03/04/2013', 'internet & web ', 'jobindex.d'),
(4, 123123, 'Webmaster knowledge of Drupal', 'Volunter job\r\n\r\nNow, we need help to manage our drupal site, which is our primary communication face to our members. The work is most of the maintenance end and supportive in nature, since board members can update the page. Good proposals for change will be like accepted.\r\n\r\n\r\nWe expect you to have:\r\n\r\n\r\n· Flair for drupal\r\n\r\n\r\n· Sympathy for the case\r\n\r\n\r\n· A creative soul and good ideas\r\n\r\n\r\nWhat you get out of it:\r\n\r\n\r\n· The chance to work in a political ', '11.02.2013', '12.05.2013', 'Denmark', 'can be made at home', '03/04/2013', 'IT Communication and PR Office', 'frivillig.'),
(5, 6596, 'IT development graduates', 'Create innovative IT solutions\r\nIn all your projekt, you deltar in all development phases - analysere, specifying, constructing and testing - as part of a strong team of business developers, system developers and system architects. Our goal is two create innovative IT solutions att support the Group''s business aktiviteter across borders and finansielle areas.\r\n\r\nWe are a large international organization elsewhere you will enjoy working in diverse teams and partnerships-huvudsakligen in English. Our platform is præget a complex heterogeneous IT environment, and using SOA architecture as well as agile development methods.\r\n\r\nAnalytical Mindset\r\nYou are about to graduate in 2013 or you having recently Obtained a master''s degree in oak computer science, software engineering or IT. Perhaps you have the experience from a student job, but the must important thing is att you meet change and challenges with commitment, initiative and a focus on the results. Professional proficiency ', '02/28/2013', '04/02/2013', 'Denmark', '2600 Glostrup', '03/04/2013', 'System & programming', 'jobindex.d'),
(6, 3369779, 'Web Designer (Akutjob)', 'triumWeb Business Sales ApS looking for a web designer for our office in Aarhus. For smaller - but ''powerfull'' - organization sought a web designer. company: We work with web solutions at a high level to business. You will be part of our design department in Aarhus. We are a company in rapid development, which is pace. We are a service-minded web agency with clients in mind. Your person: You are outgoing, ambitious, full of energy, will contribute to a positive work environment, will achieve your and our common goals. We expect that you take pride in delivering a website that our customers are happy. You have experience with CMS Webdesign, like WordPress (it is the system we use), in addition, your communication skills to be good, because you daily will have customer contact for our customers. We expect you to the following: HTML , WordPress , CSS , Photoshop You allowed to have knowledge of the following: (not required) -Basic SEO techniques , HTML5 -PHP We offer a job with many chall', '2013-02-27', '2013-03-09', 'Denmark', 'ATRIUMWEB ApS  Grenå', '03/04/2013', 'internet & web ', 'jobindex.d'),
(7, 0, 'Programmer and System Develope', 'Entrepreneur / partner wanted for international Internet project.\r\n\r\nEconomic investment is not required.\r\n\r\nYou are your own boss from the beginning.  \r\n\r\nConditions:\r\n\r\nYou must have structure at yourself and your life.\r\nYou must be really sharp in php, html / css and javascript.\r\nEfforts should be concentrated and focused, especially the first few months.  \r\nGain: Before one year has passed, it is possible for a really good earnings.  \r\n\r\nWorkplace:\r\n\r\nHome Work with email contact and regular joint meetings at a central location by appointment.\r\n\r\nInterested?\r\n\r\nContact Bjarne Hansen, Senior ApS, Egesvinget 33, 4180 Soro\r\n\r\nbjogso@gmail.com \r\n\r\nADDITIONAL INFORMATION Employment conditions: * Permanent employment Apply via email: bjogso@gmail.com', '01-03-2013', '15-03-2013', 'Denmark', 'Egesvinget 33, 4180 ', '03/04/2013', 'internet & web ', 'ofir.dk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
