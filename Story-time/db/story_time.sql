-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story time`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_id` int(11) NOT NULL,
  `Book_title` varchar(100) NOT NULL,
  `Book_description` text NOT NULL,
  `Book_price` int(11) NOT NULL,
  `Book_img` text NOT NULL,
  `book_type` varchar(100) NOT NULL,
  `Book_genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_id`, `Book_title`, `Book_description`, `Book_price`, `Book_img`, `book_type`, `Book_genre`) VALUES
(1, 'It Ends with Us', 'Sometimes it is the one who loves you who hurts you the most.\r\n\r\nLily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town in Maine where she grew up — she graduated from college, moved to Boston, and started her own business. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life suddenly seems almost too good to be true.\r\n\r\nRyle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place.\r\n\r\nAs questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan — her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened.', 11, 'images/books/It ends with us.jpg', 'novel', 'Fiction\r\nContemporary\r\nNew Adult\r\nAudiobook\r\nContemporary Romance\r\nAdult\r\nAbuse'),
(2, 'Crooked Kingdom', 'Kaz Brekker and his crew of deadly outcasts have just pulled off a heist so daring even they didn\'t think they\'d survive. But instead of divvying up a fat reward, they\'re right back to fighting for their lives.\r\n\r\nDouble-crossed and badly weakened, the crew is low on resources, allies, and hope. As powerful forces from around the world descend on Ketterdam to root out the secrets of the dangerous drug known as jurda parem, old rivals and new enemies emerge to challenge Kaz\'s cunning and test the team\'s fragile loyalties.\r\n\r\nA war will be waged on the city\'s dark and twisting streets - a battle for revenge and redemption that will decide the fate of the Grisha world.', 11, 'images/books/Crooked Kingdom.jpg', 'novel', 'Fantasy\r\nYoung Adult\r\nFiction\r\nRomance\r\nYoung Adult Fantasy\r\nMagic'),
(3, 'The Invisible Life of Addie LaRue', 'France, 1714: in a moment of desperation, a young woman makes a Faustian bargain to live forever and is cursed to be forgotten by everyone she meets.\r\n\r\nThus begins the extraordinary life of Addie LaRue, and a dazzling adventure that will play out across centuries and continents, across history and art, as a young woman learns how far she will go to leave her mark on the world.\r\n\r\nBut everything changes when, after nearly 300 years, Addie stumbles across a young man in a hidden bookstore and he remembers her name.', 11, 'images/books/Invisible life.jpg', 'novel', 'Fantasy\r\nFiction\r\nRomance\r\nHistorical Fiction\r\nAdult\r\nHistorical\r\nMagical Realism'),
(4, 'The Mountain Is You', 'This is a book about self-sabotage. Why we do it, when we do it, and how to stop doing it—for good. Coexisting but conflicting needs create self-sabotaging behaviors. This is why we resist efforts to change, often until they feel completely futile. But by extracting crucial insight from our most damaging habits, building emotional intelligence by better understanding our brains and bodies, releasing past experiences at a cellular level, and learning to act as our highest potential future selves, we can step out of our own way and into our potential. For centuries, the mountain has been used as a metaphor for the big challenges we face, especially ones that seem impossible to overcome. To scale our mountains, we actually have to do the deep internal work of excavating trauma, building resilience, and adjusting how we show up for the climb. In the end, it is not the mountain we master, but ourselves.', 11, 'images/books/Mountain is You.jpg', 'book', 'Self Help\r\nNonfiction\r\nPsychology\r\nPersonal Development\r\nMental Health\r\nAudiobook\r\nPoetry\r\n'),
(5, 'A Shadow in the Ember', 'Born shrouded in the veil of the Primals, a Maiden as the Fates promised, Seraphena Mierel’s future has never been hers. Chosen before birth to uphold the desperate deal her ancestor struck to save his people, Sera must leave behind her life and offer herself to the Primal of Death as his Consort.   \r\n\r\nHowever, Sera’s real destiny is the most closely guarded secret in all of Lasania—she’s not the well protected Maiden but an assassin with one mission—one target. Make the Primal of Death fall in love, become his weakness, and then…end him. If she fails, she dooms her kingdom to a slow demise at the hands of the Rot. \r\n\r\nSera has always known what she is. Chosen. Consort. Assassin. Weapon. A specter never fully formed yet drenched in blood. A monster. Until him. Until the Primal of Death’s unexpected words and deeds chase away the darkness gathering inside her. And his seductive touch ignites a passion she’s never allowed herself to feel and cannot feel for him. But Sera has never had a choice. Either way, her life is forfeit—it always has been, as she has been forever touched by Life and Death.', 11, 'images/books/Shadow in the ember.jpg', 'novel', 'Fantasy\r\nRomance\r\nFantasy Romance\r\nNew Adult\r\nFiction\r\nAdult\r\nParanormal\r\n'),
(6, 'The Final Gambit', 'To inherit billions, all Avery Kylie Grambs has to do is survive a few more weeks living in Hawthorne House. The paparazzi are dogging her every step. Financial pressures are building. Danger is a fact of life. And the only thing getting Avery through it all is the Hawthorne brothers. Her life is intertwined with theirs. She knows their secrets and they know her.\r\n\r\nBut as the clock ticks down to the moment when Avery will become the richest teenager on the planet, trouble arrives in the form of a visitor who needs her help—and whose presence in Hawthorne House could change everything. It soon becomes clear that there is one last puzzle to solve, and Avery and the Hawthorne brothers are drawn into a dangerous game against an unknown and powerful player.', 11, 'images/books/The Final Gambit.jpg', 'novel', 'Mystery\r\nYoung Adult\r\nRomance\r\nFiction\r\nMystery Thriller\r\nContemporary\r\nThriller'),
(7, 'Spy x Family, Vol. 1', 'Master spy Twilight is the best at what he does when it comes to going undercover on dangerous missions in the name of a better world. But when he receives the ultimate impossible assignment—get married and have a kid—he may finally be in over his head!\r\n\r\nNot one to depend on others, Twilight has his work cut out for him procuring both a wife and a child for his mission to infiltrate an elite private school. What he doesn’t know is that the wife he’s chosen is an assassin and the child he’s adopted is a telepath!', 11, 'images/books/Spy-family vol 1.webp', 'manga', 'Manga\r\nGraphic Novels\r\nComics\r\nFiction\r\nHumor\r\nComedy\r\nYoung Adult');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` varchar(5) NOT NULL,
  `Customer_UserName` varchar(100) NOT NULL,
  `Customer_Password` varchar(16) NOT NULL,
  `Customer_Mail` varchar(100) NOT NULL,
  `Customer_Phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
