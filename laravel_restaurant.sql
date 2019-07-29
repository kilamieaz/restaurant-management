-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2019 pada 18.53
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
(1, 'categoryrwt', 'Description Category wqa', '2019-07-29 09:50:51', '2019-07-29 09:50:51'),
(2, 'categorycnm', 'Description Category ufg', '2019-07-29 09:50:55', '2019-07-29 09:50:55'),
(3, 'categoryhnb', 'Description Category jjm', '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(4, 'categoryrac', 'Description Category nqq', '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(5, 'categoryyyi', 'Description Category mqr', '2019-07-29 09:51:21', '2019-07-29 09:51:21');

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
(1, 1, 1, 1, 1, 1, 3, 264168, 'Alice. \'I mean what I should like to be an advantage,\' said Alice, who felt ready to ask them what.', 1, '2019-07-29 09:50:55', '2019-07-29 09:50:55'),
(2, 1, 2, 2, 1, 1, 3, 36552, 'Caterpillar sternly. \'Explain yourself!\' \'I can\'t help it,\' said Alice, \'how am I to do anything.', 1, '2019-07-29 09:50:57', '2019-07-29 09:50:57'),
(3, 2, 2, 2, 1, 1, 3, 163455, 'I got up this morning, but I shall be a Caucus-race.\' \'What IS the fun?\' said Alice. The poor.', 1, '2019-07-29 09:50:57', '2019-07-29 09:50:57'),
(4, 1, 3, 3, 1, 1, 3, 203886, 'Hatter. He came in with the bones and the whole cause, and condemn you to learn?\' \'Well, there was.', 1, '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(5, 2, 3, 3, 1, 1, 3, 122382, 'I beg your pardon!\' said the Mock Turtle said: \'no wise fish would go anywhere without a.', 1, '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(6, 3, 3, 3, 1, 1, 3, 296382, 'VERY tired of being upset, and their curls got entangled together. Alice was silent. The King.', 1, '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(7, 1, 4, 4, 1, 1, 3, 147360, 'King, who had been anything near the right way to hear his history. I must be the right way to.', 1, '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(8, 2, 4, 4, 1, 1, 3, 202833, 'And they pinched it on both sides of the trees upon her knee, and looking anxiously about as.', 1, '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(9, 3, 4, 4, 1, 1, 3, 93765, 'Lobster Quadrille The Mock Turtle would be only rustling in the lap of her little sister\'s dream.', 1, '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(10, 4, 4, 4, 1, 1, 3, 163044, 'However, when they liked, and left off sneezing by this time.) \'You\'re nothing but out-of-the-way.', 1, '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(11, 1, 5, 5, 1, 1, 3, 39093, 'Majesty,\' said Two, in a whisper.) \'That would be like, but it was the same side of WHAT? The.', 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(12, 2, 5, 5, 1, 1, 3, 118854, 'O Mouse!\' (Alice thought this a good deal until she had peeped into the air, and came back again.', 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(13, 3, 5, 5, 1, 1, 3, 294297, 'So they began solemnly dancing round and swam slowly back again, and put it more clearly,\' Alice.', 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(14, 4, 5, 5, 1, 1, 3, 273201, 'I\'ve seen that done,\' thought Alice. \'I\'ve so often read in the way YOU manage?\' Alice asked. The.', 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(15, 5, 5, 5, 1, 1, 3, 128010, 'White Rabbit was still in existence; \'and now for the rest were quite dry again, the cook.', 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(16, 1, 6, 6, 1, 1, 3, 205833, 'And she went round the court and got behind him, and said anxiously to herself, and began to cry.', 1, '2019-07-29 09:51:07', '2019-07-29 09:51:07'),
(17, 2, 6, 6, 1, 1, 3, 104856, 'WHAT? The other guests had taken his watch out of sight, they were trying which word sounded best.', 1, '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(18, 3, 6, 6, 1, 1, 3, 125988, 'Gryphon. Alice did not seem to be\"--or if you\'d rather not.\' \'We indeed!\' cried the Mock Turtle in.', 1, '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(19, 4, 6, 6, 1, 1, 3, 111204, 'I never heard before, \'Sure then I\'m here! Digging for apples, yer honour!\' \'Digging for apples.', 1, '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(20, 5, 6, 6, 1, 1, 3, 72696, 'Alice had got its neck nicely straightened out, and was a queer-shaped little creature, and held.', 1, '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(21, 6, 6, 6, 1, 1, 3, 14877, 'You see the earth takes twenty-four hours to turn into a large crowd collected round it: there.', 1, '2019-07-29 09:51:08', '2019-07-29 09:51:08'),
(22, 1, 7, 7, 1, 1, 3, 111792, 'Mouse\'s tail; \'but why do you know I\'m mad?\' said Alice. \'Why?\' \'IT DOES THE BOOTS AND SHOES.\' the.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(23, 2, 7, 7, 1, 1, 3, 148152, 'I shall have some fun now!\' thought Alice. \'Now we shall get on better.\' \'I\'d rather not,\' the Cat.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(24, 3, 7, 7, 1, 1, 3, 31683, 'Alice. \'Of course you know the meaning of half those long words, and, what\'s more, I don\'t know,\'.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(25, 4, 7, 7, 1, 1, 3, 27735, 'First, she dreamed of little animals and birds waiting outside. The poor little juror (it was.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(26, 5, 7, 7, 1, 1, 3, 16320, 'Alice. \'I\'ve read that in some book, but I shall see it trot away quietly into the court, without.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(27, 6, 7, 7, 1, 1, 3, 266352, 'I hadn\'t gone down that rabbit-hole--and yet--and yet--it\'s rather curious, you know, with oh.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(28, 7, 7, 7, 1, 1, 3, 140004, 'SLUGGARD,\"\' said the King. On this the White Rabbit: it was a large canvas bag, which tied up at.', 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(29, 1, 8, 8, 1, 1, 3, 280926, 'Dinah my dear! Let this be a great hurry, muttering to himself in an angry tone, \'Why, Mary Ann.', 1, '2019-07-29 09:51:15', '2019-07-29 09:51:15'),
(30, 2, 8, 8, 1, 1, 3, 113988, 'Has lasted the rest of the sort,\' said the King. \'When did you ever eat a bat?\' when suddenly.', 1, '2019-07-29 09:51:15', '2019-07-29 09:51:15'),
(31, 3, 8, 8, 1, 1, 3, 91950, 'Alice. \'It goes on, you know,\' said the Caterpillar; and it put more simply--\"Never imagine.', 1, '2019-07-29 09:51:15', '2019-07-29 09:51:15'),
(32, 4, 8, 8, 1, 1, 3, 169692, 'Alice. \'Nothing,\' said Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can say.\' This.', 1, '2019-07-29 09:51:16', '2019-07-29 09:51:16'),
(33, 5, 8, 8, 1, 1, 3, 36414, 'Mouse was swimming away from her as she came upon a little way off, and she very soon finished it.', 1, '2019-07-29 09:51:16', '2019-07-29 09:51:16'),
(34, 6, 8, 8, 1, 1, 3, 55071, 'Bill\'s got the other--Bill! fetch it here, lad!--Here, put \'em up at this corner--No, tie \'em.', 1, '2019-07-29 09:51:16', '2019-07-29 09:51:16'),
(35, 7, 8, 8, 1, 1, 3, 279975, 'She was a table set out under a tree a few minutes she heard a little nervous about it just at.', 1, '2019-07-29 09:51:16', '2019-07-29 09:51:16'),
(36, 8, 8, 8, 1, 1, 3, 54240, 'Pigeon, but in a tone of great curiosity. \'It\'s a mineral, I THINK,\' said Alice. \'Of course.', 1, '2019-07-29 09:51:16', '2019-07-29 09:51:16'),
(37, 1, 9, 9, 1, 1, 3, 28482, 'He was an uncomfortably sharp chin. However, she soon found an opportunity of taking it away. She.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(38, 2, 9, 9, 1, 1, 3, 10647, 'Alice sharply, for she had not the same, shedding gallons of tears, \'I do wish they WOULD not.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(39, 3, 9, 9, 1, 1, 3, 114249, 'And then a great many teeth, so she set to work, and very angrily. \'A knot!\' said Alice, in a.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(40, 4, 9, 9, 1, 1, 3, 171879, 'Paris, and Paris is the same thing,\' said the White Rabbit returning, splendidly dressed, with a.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(41, 5, 9, 9, 1, 1, 3, 268167, 'WHAT?\' thought Alice to herself. At this moment the door opened inwards, and Alice\'s first thought.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(42, 6, 9, 9, 1, 1, 3, 26067, 'Never heard of uglifying!\' it exclaimed. \'You know what to do, and in another moment, splash! she.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(43, 7, 9, 9, 1, 1, 3, 137133, 'Mock Turtle. \'Very much indeed,\' said Alice. The poor little thing was snorting like a frog; and.', 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(44, 8, 9, 9, 1, 1, 3, 101526, 'Will you, won\'t you, will you, won\'t you, will you join the dance? Will you, won\'t you, will you.', 1, '2019-07-29 09:51:19', '2019-07-29 09:51:19'),
(45, 9, 9, 9, 1, 1, 3, 248853, 'Queen, and in another minute the whole window!\' \'Sure, it does, yer honour: but it\'s an arm, yer.', 1, '2019-07-29 09:51:19', '2019-07-29 09:51:19'),
(46, 1, 10, 10, 1, 1, 3, 200040, 'MARMALADE\', but to her usual height. It was as much right,\' said the Mock Turtle. \'Seals, turtles.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(47, 2, 10, 10, 1, 1, 3, 103059, 'Alice did not like the wind, and the Dormouse followed him: the March Hare, \'that \"I like what I.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(48, 3, 10, 10, 1, 1, 3, 89646, 'I get\" is the same tone, exactly as if she meant to take out of his shrill little voice, the name.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(49, 4, 10, 10, 1, 1, 3, 31764, 'How puzzling all these changes are! I\'m never sure what I\'m going to begin with; and being so many.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(50, 5, 10, 10, 1, 1, 3, 94029, 'So Alice began to get in?\' asked Alice again, for this curious child was very glad to do so.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(51, 6, 10, 10, 1, 1, 3, 225270, 'Alice; \'I might as well go back, and see what was coming. It was so long since she had never.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(52, 7, 10, 10, 1, 1, 3, 245616, 'So they got their tails in their mouths. So they got settled down again, the cook and the Mock.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(53, 8, 10, 10, 1, 1, 3, 85833, 'THIS size: why, I should like to show you! A little bright-eyed terrier, you know, with oh, such.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(54, 9, 10, 10, 1, 1, 3, 113844, 'Between yourself and me.\' \'That\'s the first sentence in her face, with such a thing before, and he.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(55, 10, 10, 10, 1, 1, 3, 275529, 'Alice, quite forgetting her promise. \'Treacle,\' said a whiting to a mouse, That he met in the.', 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(56, 1, 11, 11, 1, 1, 3, 181461, 'I shall see it again, but it was done. They had not as yet had any dispute with the Duchess, the.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(57, 2, 11, 11, 1, 1, 3, 62121, 'I shall never get to the croquet-ground. The other guests had taken his watch out of sight: then.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(58, 3, 11, 11, 1, 1, 3, 259188, 'CHAPTER V. Advice from a Caterpillar The Caterpillar was the Hatter. Alice felt dreadfully.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(59, 4, 11, 11, 1, 1, 3, 34062, 'Alice, as she could even make out who I am! But I\'d better take him his fan and a sad tale!\' said.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(60, 5, 11, 11, 1, 1, 3, 68436, 'I was sent for.\' \'You ought to eat her up in spite of all her coaxing. Hardly knowing what she was.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(61, 6, 11, 11, 1, 1, 3, 42687, 'I\'m on the song, she kept tossing the baby violently up and to hear her try and repeat something.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(62, 7, 11, 11, 1, 1, 3, 80286, 'Alice. \'Then it ought to speak, and no more of it appeared. \'I don\'t even know what to do, and.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(63, 8, 11, 11, 1, 1, 3, 245919, 'Alice noticed, had powdered hair that WOULD always get into the garden door. Poor Alice! It was.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(64, 9, 11, 11, 1, 1, 3, 123561, 'I ought to be done, I wonder?\' And here poor Alice began in a day or two: wouldn\'t it be murder to.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(65, 10, 11, 11, 1, 1, 3, 64614, 'Alice\'s elbow was pressed so closely against her foot, that there was nothing on it except a.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(66, 11, 11, 11, 1, 1, 3, 244023, 'Mock Turtle with a yelp of delight, which changed into alarm in another moment it was all very.', 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(67, 1, 12, 12, 1, 1, 3, 275748, 'You\'re a serpent; and there\'s no use in saying anything more till the Pigeon the opportunity of.', 1, '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(68, 2, 12, 12, 1, 1, 3, 42153, 'Alice watched the White Rabbit as he spoke, \'we were trying--\' \'I see!\' said the Gryphon. \'They.', 1, '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(69, 3, 12, 12, 1, 1, 3, 186267, 'Hatter. \'It isn\'t a bird,\' Alice remarked. \'Right, as usual,\' said the Mock Turtle recovered his.', 1, '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(70, 4, 12, 12, 1, 1, 3, 291285, 'After a while, finding that nothing more happened, she decided to remain where she was, and.', 1, '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(71, 5, 12, 12, 1, 1, 3, 187809, 'Mock Turtle said: \'no wise fish would go anywhere without a porpoise.\' \'Wouldn\'t it really?\' said.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(72, 6, 12, 12, 1, 1, 3, 266598, 'Good-bye, feet!\' (for when she had found the fan and the other paw, \'lives a March Hare. \'He.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(73, 7, 12, 12, 1, 1, 3, 150975, 'Gryphon in an undertone, \'important--unimportant--unimportant--important--\' as if his heart would.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(74, 8, 12, 12, 1, 1, 3, 146394, 'Dormouse followed him: the March Hare. \'I didn\'t know that cats COULD grin.\' \'They all can,\' said.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(75, 9, 12, 12, 1, 1, 3, 281031, 'Alice dear!\' said her sister; \'Why, what a Gryphon is, look at them--\'I wish they\'d get the trial.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(76, 10, 12, 12, 1, 1, 3, 129855, 'But I\'ve got to the Classics master, though. He was an old Turtle--we used to say.\' \'So he did, so.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(77, 11, 12, 12, 1, 1, 3, 48879, 'Alice began to say to itself \'The Duchess! The Duchess! Oh my fur and whiskers! She\'ll get me.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(78, 12, 12, 12, 1, 1, 3, 274989, 'I can\'t put it more clearly,\' Alice replied very politely, feeling quite pleased to find it out.', 1, '2019-07-29 09:51:26', '2019-07-29 09:51:26'),
(79, 1, 13, 13, 1, 1, 3, 37146, 'Kings and Queens, and among them Alice recognised the White Rabbit put on his spectacles and.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(80, 2, 13, 13, 1, 1, 3, 131562, 'Mock Turtle replied; \'and then the other, looking uneasily at the end of the officers: but the.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(81, 3, 13, 13, 1, 1, 3, 184134, 'Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can remember feeling a little.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(82, 4, 13, 13, 1, 1, 3, 239034, 'Alice joined the procession, wondering very much what would happen next. \'It\'s--it\'s a very poor.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(83, 5, 13, 13, 1, 1, 3, 77013, 'PRECIOUS nose\'; as an explanation; \'I\'ve none of them at last, with a sigh. \'I only took the.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(84, 6, 13, 13, 1, 1, 3, 2607, 'Majesty,\' said the Caterpillar. \'Is that the Gryphon repeated impatiently: \'it begins \"I passed by.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(85, 7, 13, 13, 1, 1, 3, 148698, 'There ought to go on. \'And so these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(86, 8, 13, 13, 1, 1, 3, 172911, 'Alice: \'allow me to introduce it.\' \'I don\'t see,\' said the last few minutes to see if there were.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(87, 9, 13, 13, 1, 1, 3, 288021, 'Next came an angry voice--the Rabbit\'s--\'Pat! Pat! Where are you?\' said the King. The White Rabbit.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(88, 10, 13, 13, 1, 1, 3, 23127, 'Ada,\' she said, as politely as she wandered about for a little feeble, squeaking voice, (\'That\'s.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(89, 11, 13, 13, 1, 1, 3, 286770, 'I should understand that better,\' Alice said very politely, \'if I had to double themselves up and.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(90, 12, 13, 13, 1, 1, 3, 37089, 'March Hare. \'Then it doesn\'t matter much,\' thought Alice, \'as all the rest were quite dry again.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(91, 13, 13, 13, 1, 1, 3, 182004, 'Hatter were having tea at it: a Dormouse was sitting on the same tone, exactly as if she was about.', 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(92, 1, 14, 14, 1, 1, 3, 159753, 'It quite makes my forehead ache!\' Alice watched the Queen of Hearts, she made out what she was.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(93, 2, 14, 14, 1, 1, 3, 169623, 'Queen. First came ten soldiers carrying clubs; these were all ornamented with hearts. Next came an.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(94, 3, 14, 14, 1, 1, 3, 107064, 'Footman remarked, \'till tomorrow--\' At this the whole court was in confusion, getting the Dormouse.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(95, 4, 14, 14, 1, 1, 3, 267951, 'Caterpillar. \'Well, perhaps your feelings may be different,\' said Alice; \'I might as well as the.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(96, 5, 14, 14, 1, 1, 3, 41832, 'Alice. \'Anything you like,\' said the Rabbit\'s voice along--\'Catch him, you by the soldiers, who of.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(97, 6, 14, 14, 1, 1, 3, 242277, 'For some minutes the whole pack rose up into a small passage, not much larger than a rat-hole: she.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(98, 7, 14, 14, 1, 1, 3, 263640, 'The Duchess took her choice, and was a good many voices all talking together: she made out that.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(99, 8, 14, 14, 1, 1, 3, 22941, 'Why, there\'s hardly enough of me left to make the arches. The chief difficulty Alice found at.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(100, 9, 14, 14, 1, 1, 3, 9237, 'Hatter trembled so, that he shook his head sadly. \'Do I look like it?\' he said, \'on and off, for.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(101, 10, 14, 14, 1, 1, 3, 121413, 'Alice, and she jumped up and leave the court; but on second thoughts she decided to remain where.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(102, 11, 14, 14, 1, 1, 3, 278646, 'The Antipathies, I think--\' (for, you see, as well say,\' added the Gryphon, \'that they WOULD go.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(103, 12, 14, 14, 1, 1, 3, 191007, 'Alice began to cry again, for this curious child was very hot, she kept fanning herself all the.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(104, 13, 14, 14, 1, 1, 3, 88683, 'I\'m here! Digging for apples, indeed!\' said the Mouse with an important air, \'are you all ready?.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(105, 14, 14, 14, 1, 1, 3, 119637, 'Queen furiously, throwing an inkstand at the jury-box, and saw that, in her pocket) till she had.', 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(106, 1, 15, 15, 1, 1, 3, 180438, 'The rabbit-hole went straight on like a stalk out of breath, and said \'That\'s very curious.\' \'It\'s.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(107, 2, 15, 15, 1, 1, 3, 38307, 'I\'ll get into her face, with such a rule at processions; \'and besides, what would happen next.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(108, 3, 15, 15, 1, 1, 3, 205590, 'Rabbit began. Alice thought decidedly uncivil. \'But perhaps he can\'t help it,\' she said to.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(109, 4, 15, 15, 1, 1, 3, 11616, 'I could shut up like a mouse, That he met in the chimney close above her: then, saying to her ear.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(110, 5, 15, 15, 1, 1, 3, 195378, 'I did: there\'s no use in waiting by the hedge!\' then silence, and then I\'ll tell him--it was for.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(111, 6, 15, 15, 1, 1, 3, 45957, 'While the Panther were sharing a pie--\' [later editions continued as follows The Panther took.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(112, 7, 15, 15, 1, 1, 3, 276636, 'Pray how did you begin?\' The Hatter looked at each other for some time without hearing anything.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(113, 8, 15, 15, 1, 1, 3, 140367, 'Hatter: \'but you could see it again, but it makes me grow smaller, I can guess that,\' she added in.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(114, 9, 15, 15, 1, 1, 3, 160896, 'So she began again: \'Ou est ma chatte?\' which was immediately suppressed by the officers of the.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(115, 10, 15, 15, 1, 1, 3, 28047, 'Alice hastily, afraid that it was certainly too much of it in a helpless sort of life! I do it.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(116, 11, 15, 15, 1, 1, 3, 244695, 'Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at them with.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(117, 12, 15, 15, 1, 1, 3, 65097, 'I sleep\" is the driest thing I ever was at in all directions, \'just like a telescope! I think I.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(118, 13, 15, 15, 1, 1, 3, 246159, 'NO mistake about it: it was the same when I learn music.\' \'Ah! that accounts for it,\' said Alice.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(119, 14, 15, 15, 1, 1, 3, 280827, 'In another minute the whole thing very absurd, but they were filled with tears running down his.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34'),
(120, 15, 15, 15, 1, 1, 3, 19647, 'I wish you wouldn\'t mind,\' said Alice: \'besides, that\'s not a bit of stick, and tumbled head over.', 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34');

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
(1, 1, 'Menu wpy', 'Description Menu hco', 475, 10, 'photo/0895283b25e8f213bb2aa166fdcddaaf.jpg', '2019-07-29 09:50:54', '2019-07-29 09:50:54'),
(2, 1, 'Menu tnx', 'Description Menu fii', 446, 12, 'photo/918766e5fe18f06b7cbd1112b16560a0.jpg', '2019-07-29 09:50:57', '2019-07-29 09:50:57'),
(3, 2, 'Menu bqb', 'Description Menu jup', 927, 12, 'photo/a0408292108c8df376f6a3fa95118f9e.jpg', '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(4, 1, 'Menu tiw', 'Description Menu ryf', 261, 20, 'photo/72a2301964631da6fc9e57b0e3be0eae.jpg', '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(5, 2, 'Menu jsh', 'Description Menu gpj', 947, 10, 'photo/3173fa0242bf1910208d2aa66cf28acd.jpg', '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(6, 3, 'Menu mqa', 'Description Menu fvl', 16, 13, 'photo/14f37bd3571445b41b40090a14a16a9d.jpg', '2019-07-29 09:51:07', '2019-07-29 09:51:07'),
(7, 1, 'Menu tqr', 'Description Menu cwx', 184, 11, 'photo/862654e942520ec155ea3e9916264be9.jpg', '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(8, 2, 'Menu krz', 'Description Menu orc', 983, 14, 'photo/8c4396409f43b6f6c0b91ce424ca39e9.jpg', '2019-07-29 09:51:15', '2019-07-29 09:51:15'),
(9, 3, 'Menu ukz', 'Description Menu rjm', 3, 12, 'photo/05acfef1015d4afe6f53f96e3e1d2b71.jpg', '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(10, 4, 'Menu yfv', 'Description Menu izo', 343, 11, 'photo/ae92615c52eee57ea34bf0199f4adfd2.jpg', '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(11, 1, 'Menu moa', 'Description Menu lkx', 168, 12, 'photo/7a0ed2fb601c327bc145befe822893aa.jpg', '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(12, 2, 'Menu nmo', 'Description Menu vxn', 525, 17, 'photo/71076799aa759a700ff6c06efbe06fc4.jpg', '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(13, 3, 'Menu ghz', 'Description Menu xuq', 250, 17, 'photo/bdc7705e72f27c5d27fd8ffc1c7bf6b8.jpg', '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(14, 4, 'Menu jqb', 'Description Menu qln', 796, 20, 'photo/d1ae5790c33d2a923122248e1bcbcafb.jpg', '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(15, 5, 'Menu evc', 'Description Menu ibm', 540, 13, 'photo/9717fda7eec28b074539dc5173e8fa75.jpg', '2019-07-29 09:51:34', '2019-07-29 09:51:34');

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

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sarkom Personal Access Client', 'fPg6c4L1kowyUpXyjF4iNEdzy9PgcWzhST6vKW2m', 'http://localhost', 1, 0, 0, '2019-07-29 09:52:33', '2019-07-29 09:52:33'),
(2, NULL, 'Sarkom Password Grant Client', 'vRG9THGiYr5hQouwKM8DMpNyxUfIr0u01lapGqbc', 'http://localhost', 0, 1, 0, '2019-07-29 09:52:33', '2019-07-29 09:52:33');

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

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-29 09:52:33', '2019-07-29 09:52:33');

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
(1, 1, 5, '5d3f23ef095ac', '2019-01-07 15:17:57', '2019-07-29 09:50:55'),
(2, 1, 6, '5d3f23f197393', '2019-06-13 21:04:12', '2019-07-29 09:50:57'),
(3, 1, 6, '5d3f23f421475', '2019-06-26 03:37:27', '2019-07-29 09:51:00'),
(4, 1, 7, '5d3f23f672d66', '2019-03-23 08:17:03', '2019-07-29 09:51:02'),
(5, 1, 7, '5d3f23f875237', '2019-05-10 04:30:32', '2019-07-29 09:51:04'),
(6, 1, 7, '5d3f23fbe113f', '2018-12-19 22:19:00', '2019-07-29 09:51:07'),
(7, 1, 8, '5d3f24003617b', '2019-05-08 05:18:34', '2019-07-29 09:51:12'),
(8, 1, 8, '5d3f2403dd1c9', '2018-11-26 03:13:01', '2019-07-29 09:51:15'),
(9, 1, 8, '5d3f24068b971', '2019-01-23 06:25:29', '2019-07-29 09:51:18'),
(10, 1, 8, '5d3f2409181a7', '2019-02-28 20:14:00', '2019-07-29 09:51:21'),
(11, 1, 9, '5d3f240bc75f2', '2018-09-01 08:43:04', '2019-07-29 09:51:23'),
(12, 1, 9, '5d3f240de6f39', '2019-01-22 03:47:48', '2019-07-29 09:51:25'),
(13, 1, 9, '5d3f24103b83f', '2018-08-28 05:01:43', '2019-07-29 09:51:28'),
(14, 1, 9, '5d3f2412d65d6', '2018-08-28 05:30:13', '2019-07-29 09:51:30'),
(15, 1, 9, '5d3f24164ed16', '2018-10-12 05:35:22', '2019-07-29 09:51:34');

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
(1, 'Admin', 'Akses Admin', '2019-07-29 09:49:34', '2019-07-29 09:49:34'),
(2, 'Cashier', 'Akses Cashier', '2019-07-29 09:49:35', '2019-07-29 09:49:35'),
(3, 'Chef', 'Akses Chef', '2019-07-29 09:49:35', '2019-07-29 09:49:35'),
(4, 'Waiter', 'Akses Waiter', '2019-07-29 09:49:35', '2019-07-29 09:49:35'),
(5, 'Member', 'Akses Member', '2019-07-29 09:49:35', '2019-07-29 09:49:35');

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
(1, 'Table yyw', 5, 1, '2019-07-29 09:50:54', '2019-07-29 09:50:54'),
(2, 'Table fyu', 10, 1, '2019-07-29 09:50:57', '2019-07-29 09:50:57'),
(3, 'Table kqq', 7, 1, '2019-07-29 09:51:00', '2019-07-29 09:51:00'),
(4, 'Table rin', 8, 1, '2019-07-29 09:51:02', '2019-07-29 09:51:02'),
(5, 'Table chi', 3, 1, '2019-07-29 09:51:04', '2019-07-29 09:51:04'),
(6, 'Table zxk', 6, 1, '2019-07-29 09:51:07', '2019-07-29 09:51:07'),
(7, 'Table ude', 4, 1, '2019-07-29 09:51:12', '2019-07-29 09:51:12'),
(8, 'Table yfg', 3, 1, '2019-07-29 09:51:15', '2019-07-29 09:51:15'),
(9, 'Table euj', 5, 1, '2019-07-29 09:51:18', '2019-07-29 09:51:18'),
(10, 'Table opu', 4, 1, '2019-07-29 09:51:21', '2019-07-29 09:51:21'),
(11, 'Table wic', 9, 1, '2019-07-29 09:51:23', '2019-07-29 09:51:23'),
(12, 'Table jhu', 9, 1, '2019-07-29 09:51:25', '2019-07-29 09:51:25'),
(13, 'Table bpd', 10, 1, '2019-07-29 09:51:28', '2019-07-29 09:51:28'),
(14, 'Table xwu', 3, 1, '2019-07-29 09:51:30', '2019-07-29 09:51:30'),
(15, 'Table bza', 8, 1, '2019-07-29 09:51:34', '2019-07-29 09:51:34');

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
(1, 1, 'Admin restaurant', 'im.admin@gmail.com', '2019-07-29 09:49:35', '$2y$10$ozRC2UQ1lhpLEgFbFErPCu38XvJjXftPp4pwtv1z2oUsxTTidFVK6', '082281000518', NULL, 'SxmfMkQeDM', '2019-07-29 09:49:35', '2019-07-29 09:49:35'),
(2, 3, 'Chef', 'im.chef@gmail.com', '2019-07-29 09:49:35', '$2y$10$XvmeIDfjjsgeI8TpnM/CqedFJMi1RAylmoF99Ldn7MZh8PzOxWzre', '082281000518', NULL, 'zLjd4pCcc1', '2019-07-29 09:49:35', '2019-07-29 09:49:35'),
(3, 2, 'Cashier', 'im.cashier@gmail.com', '2019-07-29 09:49:35', '$2y$10$hyn3/spWM0N7ectCiO8YNesfXPFsY6dH92kZXJL03fibWPn3NK//O', '082281000518', NULL, 'fnGpmOgbIK', '2019-07-29 09:49:36', '2019-07-29 09:49:36'),
(4, 4, 'Waiter', 'im.waiter@gmail.com', '2019-07-29 09:49:36', '$2y$10$VpKPtKT0f96uc3FS8FTFtuo0SatGx17R7MKBu6tQdPy3Ur8QTX8Lu', '082281000518', NULL, 'fWory4nrF1', '2019-07-29 09:49:36', '2019-07-29 09:49:36'),
(5, 5, 'Clay Runolfsson', 'berta.denesik@example.com', '2019-07-29 09:49:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '083793998211', 'photo/', 'lfHmCZsYfL', '2019-07-29 09:50:50', '2019-07-29 09:50:50'),
(6, 5, 'Mr. Jett Schneider', 'cgreenholt@example.net', '2019-07-29 09:49:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '084304295232', 'photo/', 'QvyPIy7AD4', '2019-07-29 09:50:50', '2019-07-29 09:50:50'),
(7, 5, 'Magdalena Klein', 'johnson77@example.com', '2019-07-29 09:50:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '087735378815', 'photo/', 'fgRI0xTzkf', '2019-07-29 09:50:50', '2019-07-29 09:50:50'),
(8, 5, 'Josephine Satterfield', 'jennings.carroll@example.net', '2019-07-29 09:50:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '088906192586', 'photo/', 'y5foPimEUm', '2019-07-29 09:50:51', '2019-07-29 09:50:51'),
(9, 5, 'Dena Hoppe IV', 'enola.vonrueden@example.net', '2019-07-29 09:50:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '088401121601', 'photo/8eee41e71fee7b415354462da751b493.jpg', 'YYNJfsXk8G', '2019-07-29 09:50:51', '2019-07-29 09:50:51');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
