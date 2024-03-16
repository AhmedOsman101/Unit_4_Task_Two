SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laravel`;

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('individual','team') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'individual',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `events` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Math Quiz', 'individual', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(2, 'Basketball Tournament', 'team', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(3, 'Chemistry Competition', 'individual', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(4, 'Soccer Match', 'team', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(5, 'Literature Challenge', 'individual', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(6, 'Volleyball Championship', 'team', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(7, 'Physics Olympics', 'individual', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(8, 'Swimming Relay', 'team', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(9, 'History Trivia', 'individual', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(10, 'Tennis Doubles', 'team', '2024-03-16 08:21:59', '2024-03-16 08:21:59'),
(11, 'Geography Bee', 'individual', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(12, 'Cricket League', 'team', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(13, 'Art Contest', 'individual', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(14, 'Ice Hockey Showdown', 'team', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(15, 'Computer Science', 'individual', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(16, 'Gymnastics Exhibition', 'team', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(17, 'Biology Quiz Bowl', 'individual', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(18, 'Baseball Tournament', 'team', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(19, 'Debate Competition', 'individual', '2024-03-16 08:22:00', '2024-03-16 08:22:00'),
(20, 'Track and Field Meet', 'team', '2024-03-16 08:22:00', '2024-03-16 08:22:00');

CREATE TABLE IF NOT EXISTS `event_participants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `score` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_participants_user_id_foreign` (`user_id`),
  KEY `event_participants_event_id_foreign` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_11_141721_create_events_table', 1),
(6, '2024_03_11_142019_create_questions_table', 1),
(7, '2024_03_11_142102_create_event_participants_table', 1);

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_event_id_foreign` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `questions` (`id`, `event_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 1, 'What is the capital of France?', 'Paris', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(3, 1, 'What is the capital of Canada?', 'Ottawa', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(4, 1, 'What is the capital of Japan?', 'Tokyo', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(5, 1, 'What is the largest planet in our solar system?', 'Jupiter', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(6, 1, 'What is the chemical symbol for gold?', 'Au', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(7, 1, 'What is the chemical symbol for carbon?', 'C', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(8, 1, 'What is the chemical formula for table salt?', 'NaCl', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(9, 2, 'Which team has won the most NBA championships?', 'Boston Celtics', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(10, 2, 'Who won the 2021 NBA Finals?', 'Milwaukee Bucks', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(11, 3, 'Who discovered penicillin?', 'Alexander Fleming', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(12, 3, 'Who discovered electricity?', 'Benjamin Franklin', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(13, 4, 'Who won the FIFA World Cup in 2018?', 'France', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(14, 4, 'Who won the 2020 UEFA Champions League?', 'Bayern Munich', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(15, 4, 'Who holds the record for the most career goals in football (soccer)?', 'Josef Bican', '2024-03-16 08:30:57', '2024-03-16 08:30:57'),
(16, 4, 'Who won the 2018 FIFA Women\'s World Cup?', 'United States', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(17, 5, 'Who is the author of \'To Kill a Mockingbird\'?', 'Harper Lee', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(18, 5, 'Who wrote \'Romeo and Juliet\'?', 'William Shakespeare', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(19, 7, 'Who developed the theory of general relativity?', 'Albert Einstein', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(20, 8, 'Who was the first woman to win an Olympic gold medal in swimming?', 'Sarah \'Fanny\' Durack', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(21, 9, 'In which city were the 2008 Summer Olympics held?', 'Beijing, China', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(22, 12, 'Who won the 2019 Cricket World Cup?', 'England', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(23, 13, 'Who painted the Sistine Chapel ceiling?', 'Michelangelo', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(24, 17, 'Who won the Formula 1 World Championship in 2020?', 'Lewis Hamilton', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(25, 20, 'Who holds the record for the most Olympic gold medals?', 'Michael Phelps', '2024-03-16 08:30:58', '2024-03-16 08:30:58'),
(26, 20, 'Who won the 2018 Masters Tournament in golf?', 'Patrick Reed', '2024-03-16 08:30:58', '2024-03-16 08:30:58');

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('individual','team') COLLATE utf8mb4_unicode_ci DEFAULT 'individual',
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Othman', 'root@mail.com', '$2y$12$A5YarJcHmxmK7PSzT9W/q.s46Ny2oHujZ8geesDJkjyc/3gUrurEW', NULL, 'admin', NULL, 'trvBDopLWrAlJtGMzwCPW1zazkkTi0S48kwFwdnekkmISDrc1m30U2dyN0BS', '2024-03-14 17:59:14', '2024-03-14 17:59:14'),
(4, 'seif', 'seif2@mail.com', '$2y$12$A5YarJcHmxmK7PSzT9W/q.s46Ny2oHujZ8geesDJkjyc/3gUrurEW', NULL, 'user', NULL, 'trvBDopLWrAlJtGMzwCPW1zazkkTi0S48kwFwdnekkmISDrc1m30U2dyN0BS', '2024-03-14 17:59:14', '2024-03-16 07:49:16'),
(5, 'same7', 'sameh23@mail.com', '$2y$12$A5YarJcHmxmK7PSzT9W/q.s46Ny2oHujZ8geesDJkjyc/3gUrurEW', NULL, 'user', NULL, 'trvBDopLWrAlJtGMzwCPW1zazkkTi0S48kwFwdnekkmISDrc1m30U2dyN0BS', '2024-03-14 17:59:14', '2024-03-16 07:49:32'),
(7, 'john doe', 'root3@mail.com', '$2y$12$5znf8Rej0SKccb9Xcw1oKOiT0Dbx2APaDufbVXeUoWUEuAkjl8xUi', NULL, 'admin', NULL, NULL, '2024-03-16 08:09:52', '2024-03-16 08:09:52');


ALTER TABLE `event_participants`
  ADD CONSTRAINT `event_participants_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_participants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `questions`
  ADD CONSTRAINT `questions_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
