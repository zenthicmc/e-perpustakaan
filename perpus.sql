-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 09:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_buku` int(3) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `deskripsi_buku` varchar(500) NOT NULL,
  `tgl_input` varchar(50) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_buku`, `judul_buku`, `penulis_buku`, `deskripsi_buku`, `tgl_input`, `cover`, `file`) VALUES
(1, 'Superior Brain Health', 'Archi Mackfly', 'Superior Brain Health’ is the ultimate guide for those who want to boost their brain power and protect their brain health so that they can be focused, alert, and solve problems creatively.You’ll discover how to maximize your cognitive abilities, increase your IQ, and avoid cognitive diseases like dementia.', '29-01-2022 14:03', 'Superior-Brain-Health.png', 'Superior-Brain-Health.pdf'),
(2, 'Disappeared From Her Home', 'Catherine Louisa Pirkis', 'Disappeared From Her Home: A Novel by Catherine Louisa Pirkis', '29-01-2022 14:04', 'Disappeared-From-Her-Home-A-Novel.jpg', 'Disappeared-From-Her-Home-A-Novel.pdf'),
(3, 'Thought & Belief - The Inner Human', 'Neal Fox', 'The immaterial inner human is explained in detail. Soul and spirit, and their relationship with the brain, are described clearly and in depth. The Bible tells us a lot about the inner human, how it functions, how we think and form beliefs, the component parts, what causes dysfunctions when they occur, and also remedies. It also explains why we know we are alive, dreaming, and other fascinating subjects including why so many people cannot think clearly about important issues, and why there is so ', '29-01-2022 14:05', 'Thought-Belief-The-Inner-Human.png', 'Thought-Belief-The-Inner-Human.pdf'),
(4, 'Inner Conversations Stories about Life', 'Iris', 'Inspires you to think differently about life, society and philosophy and appreciate life through random creative writings and poems.An action is a commitment to something that you are responsible for. This action is a reflection of your limited capability in finding all possible ways of doing something.', '29-01-2022 14:09', 'Inner-Conversations-Stories-about-Life.png', 'Inner-Conversations-Stories-about-Life.pdf'),
(5, 'Obsidians War', 'M S Lawson', 'Running away from his mothers crazy political schemes and a cheating fiancee by enlisting, Gellibrand Obsidian is shot down over jungle on the imperial rim and has to lead his platoon on a fightback against a deadly group of mercenaries known as The Destroyers.', '29-01-2022 14:11', 'Obsidian-s-War.jpg', 'Obsidian-s-War.pdf'),
(7, 'Second Variety', 'Dick, Philip K.', 'Second Variety is a science fiction novelette by American writer Philip K. Dick, first published in Space Science Fiction magazine, in May 1953. Set in a world where war between the Soviet Union and United Nations has reduced most of the world to a barren wasteland, the story concerns the discovery, by the few remaining soldiers left, that self-replicating robots originally built to assassinate Soviet agents have gained sentience and are now plotting against both sides.', '29-01-2022 14:49', 'Second-Variety.jpg', 'Second-Variety.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_buku` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
