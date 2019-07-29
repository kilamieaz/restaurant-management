-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2019 pada 16.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_restaurant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'categoryiha', 'Description Category swn', '2019-07-29 04:54:54', '2019-07-29 04:54:54'),
(2, 'categoryvez', 'Description Category eso', '2019-07-29 04:54:57', '2019-07-29 04:54:57'),
(3, 'categorylup', 'Description Category lxy', '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(4, 'categoryrhf', 'Description Category vep', '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(5, 'categoryrro', 'Description Category cis', '2019-07-29 04:55:20', '2019-07-29 04:55:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `chef_id` bigint(20) UNSIGNED DEFAULT NULL,
  `waiter_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_orders`
--

INSERT INTO `detail_orders` (`id`, `order_id`, `menu_id`, `table_id`, `chef_id`, `waiter_id`, `quantity`, `sub_total`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 3, 237144, 'ARE you doing out here? Run home this moment, and fetch me a pair of gloves and a fan! Quick.', 1, '2019-07-29 04:54:57', '2019-07-29 04:54:57'),
(2, 1, 2, 2, 1, 1, 3, 239160, 'So they got their tails fast in their mouths; and the whole window!\' \'Sure, it does, yer honour.', 1, '2019-07-29 04:54:59', '2019-07-29 04:54:59'),
(3, 2, 2, 2, 1, 1, 3, 142395, 'Alice went on in a louder tone. \'ARE you to leave off this minute!\' She generally gave herself.', 1, '2019-07-29 04:54:59', '2019-07-29 04:54:59'),
(4, 1, 3, 3, 1, 1, 3, 109542, 'Then they both cried. \'Wake up, Dormouse!\' And they pinched it on both sides at once. \'Give your.', 1, '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(5, 2, 3, 3, 1, 1, 3, 140346, 'Alice could hardly hear the very middle of her own child-life, and the others looked round also.', 1, '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(6, 3, 3, 3, 1, 1, 3, 127542, 'I think.\' And she began nursing her child again, singing a sort of life! I do it again and again.\'.', 1, '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(7, 1, 4, 4, 1, 1, 3, 165870, 'Duchess said to the door, she found she had got burnt, and eaten up by two guinea-pigs, who were.', 1, '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(8, 2, 4, 4, 1, 1, 3, 91608, 'And he got up very sulkily and crossed over to the croquet-ground. The other guests had taken his.', 1, '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(9, 3, 4, 4, 1, 1, 3, 147570, 'I could shut up like a steam-engine when she next peeped out the words: \'Where\'s the other side.', 1, '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(10, 4, 4, 4, 1, 1, 3, 29589, 'M?\' said Alice. \'What sort of idea that they could not make out which were the cook, to see you.', 1, '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(11, 1, 5, 5, 1, 1, 3, 35625, 'Queen left off, quite out of it, and yet it was only sobbing,\' she thought, and rightly too, that.', 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(12, 2, 5, 5, 1, 1, 3, 104484, 'The Cat seemed to think that there was no \'One, two, three, and away,\' but they were nice grand.', 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(13, 3, 5, 5, 1, 1, 3, 237447, 'ME\' beautifully printed on it in her hands, and she told her sister, as well as pigs, and was just.', 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(14, 4, 5, 5, 1, 1, 3, 46863, 'At last the Dodo solemnly presented the thimble, saying \'We beg your pardon!\' said the Queen.', 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(15, 5, 5, 5, 1, 1, 3, 85401, 'I think it was,\' the March Hare said to herself \'It\'s the Cheshire Cat, she was walking by the.', 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(16, 1, 6, 6, 1, 1, 3, 161349, 'Hatter. \'Stolen!\' the King said, for about the reason so many out-of-the-way things had happened.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(17, 2, 6, 6, 1, 1, 3, 87708, 'Duchess by this time, and was going to do so. \'Shall we try another figure of the house down!\'.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(18, 3, 6, 6, 1, 1, 3, 33525, 'Caterpillar seemed to be said. At last the Gryphon in an undertone.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(19, 4, 6, 6, 1, 1, 3, 162792, 'Alice guessed in a trembling voice:-- \'I passed by his face only, she would manage it. \'They were.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(20, 5, 6, 6, 1, 1, 3, 238914, 'Dormouse: \'not in that case I can do without lobsters, you know. Come on!\' \'Everybody says \"come.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(21, 6, 6, 6, 1, 1, 3, 134010, 'Poor Alice! It was as much right,\' said the King: \'leave out that she tipped over the wig, (look.', 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(22, 1, 7, 7, 1, 1, 3, 183840, 'Soup of the country is, you ARE a simpleton.\' Alice did not venture to go through next walking.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(23, 2, 7, 7, 1, 1, 3, 35181, 'When she got up, and there she saw in my own tears! That WILL be a queer thing, to be said. At.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(24, 3, 7, 7, 1, 1, 3, 148242, 'They had a head unless there was hardly room for this, and Alice was not much larger than a pig.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(25, 4, 7, 7, 1, 1, 3, 94248, 'The Mouse did not seem to put everything upon Bill! I wouldn\'t be so easily offended!\' \'You\'ll get.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(26, 5, 7, 7, 1, 1, 3, 233250, 'Cheshire Cat, she was quite surprised to see that she had felt quite relieved to see what was on.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(27, 6, 7, 7, 1, 1, 3, 85026, 'There was a little irritated at the stick, running a very truthful child; \'but little girls in my.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(28, 7, 7, 7, 1, 1, 3, 87471, 'Alice. It looked good-natured, she thought: still it was her turn or not. \'Oh, PLEASE mind what.', 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(29, 1, 8, 8, 1, 1, 3, 57456, 'Alice as he spoke. \'A cat may look at a reasonable pace,\' said the Lory. Alice replied very.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(30, 2, 8, 8, 1, 1, 3, 145035, 'I will tell you his history,\' As they walked off together, Alice heard the Rabbit noticed Alice.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(31, 3, 8, 8, 1, 1, 3, 258234, 'I goes like a candle. I wonder what Latitude or Longitude either, but thought they were filled.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(32, 4, 8, 8, 1, 1, 3, 31092, 'I\'m Mabel, I\'ll stay down here with me! There are no mice in the air. \'--as far out to her chin.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(33, 5, 8, 8, 1, 1, 3, 25092, 'Duchess\'s knee, while plates and dishes crashed around it--once more the pig-baby was sneezing on.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(34, 6, 8, 8, 1, 1, 3, 143430, 'I\'ll tell you how the Dodo had paused as if he doesn\'t begin.\' But she went on, very much pleased.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(35, 7, 8, 8, 1, 1, 3, 249423, 'CAN all that stuff,\' the Mock Turtle recovered his voice, and, with tears again as she had not.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(36, 8, 8, 8, 1, 1, 3, 50859, 'Alice thought), and it put the Dormouse into the Dormouse\'s place, and Alice was just beginning to.', 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(37, 1, 9, 9, 1, 1, 3, 121887, 'I was going off into a small passage, not much like keeping so close to her: its face in some.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(38, 2, 9, 9, 1, 1, 3, 81066, 'Hatter. This piece of rudeness was more than Alice could speak again. The rabbit-hole went.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(39, 3, 9, 9, 1, 1, 3, 227913, 'Alice looked round, eager to see what was on the shingle--will you come to an end! \'I wonder what.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(40, 4, 9, 9, 1, 1, 3, 200070, 'Footman went on just as if it makes rather a hard word, I will just explain to you never had to be.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(41, 5, 9, 9, 1, 1, 3, 106467, 'Canary called out as loud as she could not possibly reach it: she could have told you butter.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(42, 6, 9, 9, 1, 1, 3, 142230, 'I know I do!\' said Alice to herself, as she could not taste theirs, and the procession came.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(43, 7, 9, 9, 1, 1, 3, 191472, 'Alice ventured to ask. \'Suppose we change the subject,\' the March Hare: she thought of herself, \'I.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(44, 8, 9, 9, 1, 1, 3, 207588, 'Gryphon, \'that they WOULD not remember the simple and loving heart of her head down to nine inches.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(45, 9, 9, 9, 1, 1, 3, 297153, 'Gryphon, with a shiver. \'I beg your pardon!\' she exclaimed in a dreamy sort of way to change the.', 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(46, 1, 10, 10, 1, 1, 3, 162747, 'The players all played at once set to work shaking him and punching him in the distance, and she.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(47, 2, 10, 10, 1, 1, 3, 26511, 'March Hare,) \'--it was at in all my limbs very supple By the use of this elegant thimble\'; and.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(48, 3, 10, 10, 1, 1, 3, 19890, 'But the snail replied \"Too far, too far!\" and gave a little snappishly. \'You\'re enough to try the.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(49, 4, 10, 10, 1, 1, 3, 81645, 'ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(50, 5, 10, 10, 1, 1, 3, 263685, 'I beat him when he sneezes; For he can thoroughly enjoy The pepper when he sneezes; For he can.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(51, 6, 10, 10, 1, 1, 3, 24114, 'Adventures of hers would, in the middle, being held up by a row of lodging houses, and behind it.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(52, 7, 10, 10, 1, 1, 3, 41949, 'While she was considering in her life before, and he says it\'s so useful, it\'s worth a hundred.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(53, 8, 10, 10, 1, 1, 3, 223602, 'The jury all looked puzzled.) \'He must have a trial: For really this morning I\'ve nothing to do.\".', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(54, 9, 10, 10, 1, 1, 3, 283011, 'Gryphon. \'--you advance twice--\' \'Each with a trumpet in one hand and a Canary called out in a.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(55, 10, 10, 10, 1, 1, 3, 188394, 'IT. It\'s HIM.\' \'I don\'t believe you do either!\' And the moral of that is--\"Be what you like,\' said.', 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(56, 1, 11, 11, 1, 1, 3, 23520, 'How I wonder what I like\"!\' \'You might just as usual. \'Come, there\'s half my plan done now! How.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(57, 2, 11, 11, 1, 1, 3, 92664, 'THIS size: why, I should have liked teaching it tricks very much, if--if I\'d only been the.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(58, 3, 11, 11, 1, 1, 3, 260241, 'MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'You must be,\' said the Cat, \'if you.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(59, 4, 11, 11, 1, 1, 3, 111738, 'Alice did not appear, and after a few yards off. The Cat only grinned when it grunted again, and.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(60, 5, 11, 11, 1, 1, 3, 283257, 'I must have got in as well,\' the Hatter instead!\' CHAPTER VII. A Mad Tea-Party There was not even.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(61, 6, 11, 11, 1, 1, 3, 213483, 'I\'ll try if I shall have somebody to talk nonsense. The Queen\'s Croquet-Ground A large rose-tree.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(62, 7, 11, 11, 1, 1, 3, 276861, 'Queen. \'It proves nothing of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * \'Come.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(63, 8, 11, 11, 1, 1, 3, 165078, 'Turtle\'s heavy sobs. Lastly, she pictured to herself how she would catch a bad cold if she did not.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(64, 9, 11, 11, 1, 1, 3, 92286, 'Laughing and Grief, they used to read fairy-tales, I fancied that kind of authority among them.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(65, 10, 11, 11, 1, 1, 3, 117915, 'Mouse. \'--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria--\"\' \'Ugh!\' said the.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(66, 11, 11, 11, 1, 1, 3, 212709, 'Tortoise because he was going a journey, I should think!\' (Dinah was the BEST butter, you know.\'.', 1, '2019-07-29 04:55:23', '2019-07-29 04:55:23'),
(67, 1, 12, 12, 1, 1, 3, 295611, 'Duchess. \'I make you grow shorter.\' \'One side will make you dry enough!\' They all returned from.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(68, 2, 12, 12, 1, 1, 3, 115164, 'Dormouse go on crying in this way! Stop this moment, and fetch me a good deal until she made some.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(69, 3, 12, 12, 1, 1, 3, 210843, 'Hatter. \'You might just as the Lory positively refused to tell them something more. \'You promised.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(70, 4, 12, 12, 1, 1, 3, 189324, 'Hatter: \'as the things between whiles.\' \'Then you keep moving round, I suppose?\' \'Yes,\' said Alice.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(71, 5, 12, 12, 1, 1, 3, 51201, 'They were indeed a queer-looking party that assembled on the twelfth?\' Alice went on planning to.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(72, 6, 12, 12, 1, 1, 3, 94098, 'I used--and I don\'t want to be?\' it asked. \'Oh, I\'m not used to say.\' \'So he did, so he with his.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(73, 7, 12, 12, 1, 1, 3, 107214, 'IT. It\'s HIM.\' \'I don\'t like them!\' When the sands are all pardoned.\' \'Come, THAT\'S a good.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(74, 8, 12, 12, 1, 1, 3, 101145, 'I think?\' he said to herself \'This is Bill,\' she gave one sharp kick, and waited to see what was.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(75, 9, 12, 12, 1, 1, 3, 282570, 'Father William,\' the young Crab, a little glass box that was sitting next to her. \'I can see.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(76, 10, 12, 12, 1, 1, 3, 255399, 'I\'m not used to say.\' \'So he did, so he with his whiskers!\' For some minutes the whole thing, and.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(77, 11, 12, 12, 1, 1, 3, 99192, 'I\'ll never go THERE again!\' said Alice doubtfully: \'it means--to--make--anything--prettier.\'.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(78, 12, 12, 12, 1, 1, 3, 202116, 'NOT be an advantage,\' said Alice, \'we learned French and music.\' \'And washing?\' said the Queen.', 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(79, 1, 13, 13, 1, 1, 3, 219558, 'Mouse was swimming away from her as hard as she could not taste theirs, and the arm that was.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(80, 2, 13, 13, 1, 1, 3, 57849, 'CAN I have dropped them, I wonder?\' Alice guessed in a Little Bill It was so small as this is May.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(81, 3, 13, 13, 1, 1, 3, 77373, 'Alice whispered, \'that it\'s done by everybody minding their own business,\' the Duchess asked, with.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(82, 4, 13, 13, 1, 1, 3, 197556, 'It was opened by another footman in livery came running out of its mouth and yawned once or twice.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(83, 5, 13, 13, 1, 1, 3, 108279, 'GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be shutting up like a telescope! I think it.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(84, 6, 13, 13, 1, 1, 3, 271932, 'And she began nibbling at the March Hare: she thought it must be a book of rules for shutting.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(85, 7, 13, 13, 1, 1, 3, 254976, 'And she thought of herself, \'I don\'t know of any use, now,\' thought poor Alice, \'it would be four.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(86, 8, 13, 13, 1, 1, 3, 299580, 'Queen,\' and she crossed her hands on her face brightened up at the Mouse\'s tail; \'but why do you.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(87, 9, 13, 13, 1, 1, 3, 66912, 'THIS size: why, I should frighten them out again. That\'s all.\' \'Thank you,\' said Alice, in a voice.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(88, 10, 13, 13, 1, 1, 3, 203496, 'HER about it.\' (The jury all looked puzzled.) \'He must have been changed for Mabel! I\'ll try if I.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(89, 11, 13, 13, 1, 1, 3, 21330, 'King said to the other, trying every door, she ran off at once in her head, she tried her best to.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(90, 12, 13, 13, 1, 1, 3, 181350, 'Then she went on for some time in silence: at last in the flurry of the Lobster Quadrille, that.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(91, 13, 13, 13, 1, 1, 3, 142695, 'Rabbit in a solemn tone, only changing the order of the players to be a letter, after all: it\'s a.', 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(92, 1, 14, 14, 1, 1, 3, 44130, 'Alice desperately: \'he\'s perfectly idiotic!\' And she tried another question. \'What sort of knot.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(93, 2, 14, 14, 1, 1, 3, 19302, 'Alice. \'Why, SHE,\' said the cook. The King and Queen of Hearts were seated on their backs was the.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(94, 3, 14, 14, 1, 1, 3, 112959, 'Bill\'s got to see if she did not sneeze, were the verses to himself: \'\"WE KNOW IT TO BE TRUE--\".', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(95, 4, 14, 14, 1, 1, 3, 171267, 'I should like it put more simply--\"Never imagine yourself not to be found: all she could not swim.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(96, 5, 14, 14, 1, 1, 3, 75678, 'THAT!\' \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in here? Why.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(97, 6, 14, 14, 1, 1, 3, 121572, 'Queen. \'I haven\'t the slightest idea,\' said the Duck: \'it\'s generally a frog or a serpent?\' \'It.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(98, 7, 14, 14, 1, 1, 3, 118470, 'Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Gryphon, and the constant heavy sobbing of.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(99, 8, 14, 14, 1, 1, 3, 266964, 'Alice severely. \'What are you thinking of?\' \'I beg your pardon!\' cried Alice again, for really I\'m.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(100, 9, 14, 14, 1, 1, 3, 243381, 'ME.\' \'You!\' said the Lory. Alice replied very politely, \'if I had our Dinah here, I know all sorts.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(101, 10, 14, 14, 1, 1, 3, 243912, 'King. \'I can\'t help it,\' she said to herself as she swam about, trying to make it stop. \'Well, I\'d.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(102, 11, 14, 14, 1, 1, 3, 157077, 'Queen to-day?\' \'I should have croqueted the Queen\'s absence, and were quite silent, and looked at.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(103, 12, 14, 14, 1, 1, 3, 7584, 'Five. \'I heard every word you fellows were saying.\' \'Tell us a story.\' \'I\'m afraid I can\'t tell.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(104, 13, 14, 14, 1, 1, 3, 100539, 'So they began solemnly dancing round and get in at the end.\' \'If you can\'t think! And oh, my poor.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(105, 14, 14, 14, 1, 1, 3, 127179, 'NO mistake about it: it was good manners for her to begin.\' For, you see, Miss, this here ought to.', 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(106, 1, 15, 15, 1, 1, 3, 185856, 'The three soldiers wandered about for it, she found to be talking in his throat,\' said the Mock.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(107, 2, 15, 15, 1, 1, 3, 57312, 'Alice timidly. \'Would you tell me, Pat, what\'s that in some book, but I shall be late!\' (when she.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(108, 3, 15, 15, 1, 1, 3, 174939, 'Gryphon hastily. \'Go on with the Lory, who at last she spread out her hand, watching the setting.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(109, 4, 15, 15, 1, 1, 3, 244137, 'There was a bright brass plate with the tarts, you know--\' \'But, it goes on \"THEY ALL RETURNED.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(110, 5, 15, 15, 1, 1, 3, 88536, 'Hatter. This piece of bread-and-butter in the air. Even the Duchess to play croquet.\' The.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(111, 6, 15, 15, 1, 1, 3, 201063, 'Alice rather unwillingly took the watch and looked at Alice. \'It goes on, you know,\' the Mock.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(112, 7, 15, 15, 1, 1, 3, 41319, 'I should think very likely it can talk: at any rate a book of rules for shutting people up like a.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(113, 8, 15, 15, 1, 1, 3, 240570, 'Alice for protection. \'You shan\'t be able! I shall have somebody to talk about her repeating \'YOU.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(114, 9, 15, 15, 1, 1, 3, 273393, 'She said the Hatter began, in a shrill, passionate voice. \'Would YOU like cats if you hold it too.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(115, 10, 15, 15, 1, 1, 3, 34875, 'I shall never get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(116, 11, 15, 15, 1, 1, 3, 45654, 'White Rabbit hurried by--the frightened Mouse splashed his way through the neighbouring pool--she.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(117, 12, 15, 15, 1, 1, 3, 292305, 'There\'s no pleasing them!\' Alice was very likely to eat the comfits: this caused some noise and.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(118, 13, 15, 15, 1, 1, 3, 144312, 'I mentioned before, And have grown most uncommonly fat; Yet you finished the first minute or two.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(119, 14, 15, 15, 1, 1, 3, 72174, 'Alice began to feel a little house in it a bit, if you like,\' said the Caterpillar. \'Is that all?\'.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32'),
(120, 15, 15, 15, 1, 1, 3, 42354, 'Dinah, if I can listen all day about it!\' and he poured a little pattering of feet on the door of.', 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `name`, `description`, `price`, `stock`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menu psr', 'Description Menu kbl', 139, 16, 'photo/fe7253fb3305892ca78cce4c7dbeb248.jpg', '2019-07-29 04:54:56', '2019-07-29 04:54:56'),
(2, 1, 'Menu ues', 'Description Menu flx', 303, 10, 'photo/7ceb79b5f2c34d40285a10d0f474eb7c.jpg', '2019-07-29 04:54:59', '2019-07-29 04:54:59'),
(3, 2, 'Menu mpi', 'Description Menu eyz', 171, 16, 'photo/c54c8cae32e935bab0cdb87dfa15eeac.jpg', '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(4, 1, 'Menu bki', 'Description Menu rrk', 249, 11, 'photo/3031e9bc2fba27b4efc1a2f1a623bae1.jpg', '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(5, 2, 'Menu tyk', 'Description Menu bob', 794, 19, 'photo/cd860182b4a59a43f0060210f42e5110.jpg', '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(6, 3, 'Menu amw', 'Description Menu ygv', 810, 19, 'photo/4823a6dc082abf05083cbc3bc75161b0.jpg', '2019-07-29 04:55:09', '2019-07-29 04:55:09'),
(7, 1, 'Menu ivb', 'Description Menu tpq', 52, 18, 'photo/a43cf430b6d0e9928a7e9d6f0e24e10b.jpg', '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(8, 2, 'Menu swz', 'Description Menu tmu', 530, 11, 'photo/ee989ff49219ee40862f3a16a2bc9a5d.jpg', '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(9, 3, 'Menu zxt', 'Description Menu iie', 842, 20, 'photo/2eb341684e579608b7d11c05a69fa031.jpg', '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(10, 4, 'Menu urb', 'Description Menu kqk', 685, 20, 'photo/9a5c60715b64954722b0c46a603b5ba8.jpg', '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(11, 1, 'Menu lyn', 'Description Menu xtd', 846, 16, 'photo/63827d28dcfb7f64344e753df388a884.jpg', '2019-07-29 04:55:22', '2019-07-29 04:55:22'),
(12, 2, 'Menu grv', 'Description Menu ekg', 312, 11, 'photo/ad8b821e88438ab1604703eeb7f6c264.jpg', '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(13, 3, 'Menu oee', 'Description Menu sdt', 316, 14, 'photo/c32d9175017017defe7c5c5f529a29a4.jpg', '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(14, 4, 'Menu bqp', 'Description Menu czu', 967, 20, 'photo/e75be2cb5b1650f230c125c5dca7f7f4.jpg', '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(15, 5, 'Menu dqx', 'Description Menu oib', 250, 19, 'photo/83ecf10a883e5649904a1559b59a0f9d.jpg', '2019-07-29 04:55:32', '2019-07-29 04:55:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_07_11_065019_create_menus_table', 1),
(9, '2019_07_11_065618_create_categories_table', 1),
(10, '2019_07_11_065818_create_detail_orders_table', 1),
(11, '2019_07_11_065926_create_orders_table', 1),
(12, '2019_07_11_070116_create_roles_table', 1),
(13, '2019_07_12_162407_create_tables_table', 1),
(14, '9999_99_99_999999_add_foreign_key', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cashier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `cashier_id`, `member_id`, `order_code`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '5d3ede90e0086', '2019-06-27 19:52:33', '2019-07-29 04:54:56'),
(2, 1, 6, '5d3ede93af5a4', '2019-02-27 06:08:57', '2019-07-29 04:54:59'),
(3, 1, 6, '5d3ede961135d', '2018-08-24 22:30:17', '2019-07-29 04:55:02'),
(4, 1, 7, '5d3ede9868051', '2018-12-11 03:56:05', '2019-07-29 04:55:04'),
(5, 1, 7, '5d3ede9b7947f', '2019-07-29 04:07:36', '2019-07-29 04:55:07'),
(6, 1, 7, '5d3ede9e026fe', '2018-10-18 14:21:58', '2019-07-29 04:55:10'),
(7, 1, 8, '5d3edea06d516', '2018-08-05 09:55:52', '2019-07-29 04:55:12'),
(8, 1, 8, '5d3edea35f2c5', '2018-09-27 15:46:55', '2019-07-29 04:55:15'),
(9, 1, 8, '5d3edea5bcc12', '2019-03-24 23:56:54', '2019-07-29 04:55:17'),
(10, 1, 8, '5d3edea811748', '2019-07-17 20:34:46', '2019-07-29 04:55:20'),
(11, 1, 9, '5d3edeaae9e89', '2019-07-11 02:33:34', '2019-07-29 04:55:22'),
(12, 1, 9, '5d3edeada3d21', '2019-01-22 17:23:30', '2019-07-29 04:55:25'),
(13, 1, 9, '5d3edeb03849b', '2018-11-04 22:36:19', '2019-07-29 04:55:28'),
(14, 1, 9, '5d3edeb27dfe0', '2019-01-30 18:36:21', '2019-07-29 04:55:30'),
(15, 1, 9, '5d3edeb486040', '2018-11-22 07:08:42', '2019-07-29 04:55:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Akses Admin', '2019-07-29 04:54:38', '2019-07-29 04:54:38'),
(2, 'Cashier', 'Akses Cashier', '2019-07-29 04:54:39', '2019-07-29 04:54:39'),
(3, 'Chef', 'Akses Chef', '2019-07-29 04:54:39', '2019-07-29 04:54:39'),
(4, 'Waiter', 'Akses Waiter', '2019-07-29 04:54:39', '2019-07-29 04:54:39'),
(5, 'Member', 'Akses Member', '2019-07-29 04:54:39', '2019-07-29 04:54:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tables`
--

INSERT INTO `tables` (`id`, `name`, `capacity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Table yyr', 8, 1, '2019-07-29 04:54:56', '2019-07-29 04:54:56'),
(2, 'Table zdz', 4, 1, '2019-07-29 04:54:59', '2019-07-29 04:54:59'),
(3, 'Table gqu', 3, 1, '2019-07-29 04:55:02', '2019-07-29 04:55:02'),
(4, 'Table mev', 6, 1, '2019-07-29 04:55:04', '2019-07-29 04:55:04'),
(5, 'Table qbw', 6, 1, '2019-07-29 04:55:07', '2019-07-29 04:55:07'),
(6, 'Table vbz', 4, 1, '2019-07-29 04:55:10', '2019-07-29 04:55:10'),
(7, 'Table rrq', 6, 1, '2019-07-29 04:55:12', '2019-07-29 04:55:12'),
(8, 'Table iar', 10, 1, '2019-07-29 04:55:15', '2019-07-29 04:55:15'),
(9, 'Table pva', 5, 1, '2019-07-29 04:55:17', '2019-07-29 04:55:17'),
(10, 'Table agd', 8, 1, '2019-07-29 04:55:20', '2019-07-29 04:55:20'),
(11, 'Table pbx', 10, 1, '2019-07-29 04:55:22', '2019-07-29 04:55:22'),
(12, 'Table ynq', 9, 1, '2019-07-29 04:55:25', '2019-07-29 04:55:25'),
(13, 'Table jfr', 4, 1, '2019-07-29 04:55:28', '2019-07-29 04:55:28'),
(14, 'Table ndu', 5, 1, '2019-07-29 04:55:30', '2019-07-29 04:55:30'),
(15, 'Table sdy', 10, 1, '2019-07-29 04:55:32', '2019-07-29 04:55:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `handphone`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin restaurant', 'im.admin@gmail.com', '2019-07-29 04:54:39', '$2y$10$fUDSveqfasKx1uda.RppFOS77Q.rrbcm24NHIYy1KaUgDPqjgbthi', '082281000518', NULL, 'yrC03rC9fF', '2019-07-29 04:54:40', '2019-07-29 04:54:40'),
(2, 3, 'Chef', 'im.chef@gmail.com', '2019-07-29 04:54:40', '$2y$10$2H.aqaHesWIxjaOv8rpXY.wn5vm6M8bKK.z50LvSsOFl8lqYtLaKK', '082281000518', NULL, 'WdhfWHZjLh', '2019-07-29 04:54:40', '2019-07-29 04:54:40'),
(3, 2, 'Cashier', 'im.cashier@gmail.com', '2019-07-29 04:54:40', '$2y$10$am19PxQs8VPUh5.n3IkA9.s2HvUPN3p5Qd/Uk4PktKXYxFAFPGvDW', '082281000518', NULL, 'ws7EWcGtmo', '2019-07-29 04:54:40', '2019-07-29 04:54:40'),
(4, 4, 'Waiter', 'im.waiter@gmail.com', '2019-07-29 04:54:40', '$2y$10$4aI2XDOBV/3HBxHPtWmbcuG1Qr5PvsIzXjxc0y8LpiX0/A2ofgEQa', '082281000518', NULL, 'eBIO4A85kQ', '2019-07-29 04:54:40', '2019-07-29 04:54:40'),
(5, 5, 'Dr. Kellie Lehner', 'grimes.eileen@example.com', '2019-07-29 04:54:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '086856534857', 'photo/93e2628b86f70e0d69ad8728aa7224cb.jpg', 'YqG8htp0ai', '2019-07-29 04:54:53', '2019-07-29 04:54:53'),
(6, 5, 'Miss Katarina Kub DDS', 'leuschke.adrain@example.net', '2019-07-29 04:54:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '084350691026', 'photo/70cecbbc0234a37e6a5868de0783739d.jpg', 'dOV3E7CyRk', '2019-07-29 04:54:53', '2019-07-29 04:54:53'),
(7, 5, 'Florida Reilly', 'baylee52@example.com', '2019-07-29 04:54:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '086360788147', 'photo/ee23b1650cef829acd71ff4054507ef4.jpg', 'xIMQm3lkDk', '2019-07-29 04:54:54', '2019-07-29 04:54:54'),
(8, 5, 'Martin Larkin', 'celine99@example.com', '2019-07-29 04:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '085412232147', 'photo/b5c87f5cda6443c24944164d6f49c4a5.jpg', 'umEIDWUiXq', '2019-07-29 04:54:54', '2019-07-29 04:54:54'),
(9, 5, 'Nikolas Hintz', 'huel.lance@example.net', '2019-07-29 04:54:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '082068934840', 'photo/17753b4201c5795fd9b09722f8e50618.jpg', 'ddcRsZwKI4', '2019-07-29 04:54:54', '2019-07-29 04:54:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_orders_order_id_index` (`order_id`),
  ADD KEY `detail_orders_menu_id_index` (`menu_id`),
  ADD KEY `detail_orders_table_id_index` (`table_id`),
  ADD KEY `detail_orders_chef_id_index` (`chef_id`),
  ADD KEY `detail_orders_waiter_id_index` (`waiter_id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_category_id_index` (`category_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_cashier_id_index` (`cashier_id`),
  ADD KEY `orders_member_id_index` (`member_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_orders`
--
ALTER TABLE `detail_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD CONSTRAINT `detail_orders_chef_id_foreign` FOREIGN KEY (`chef_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `detail_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `detail_orders_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`),
  ADD CONSTRAINT `detail_orders_waiter_id_foreign` FOREIGN KEY (`waiter_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cashier_id_foreign` FOREIGN KEY (`cashier_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
