-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 06 fév. 2018 à 17:18
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `mobilisense`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'solomon', 'sulimanabdulgadeir@gmail.com', '$2y$10$HyPl3z/QyOMvgrq577ry4eTGCFIhCrs8hB4FpblyEOabJjf9HaqBm', '3FdPFzZzIyhhHiK0uVuEDwbHs7fVGAD4li8RXM5sWtYyFdvMNK5VOB4hARPu', '2018-02-05 12:20:08', '2018-02-05 12:20:08'),
(2, 0, 'test', 'test@test.test', '$2y$10$rbZuFgOrt276jeJhBcXVRuQ2P8Byr/eQADPNVFzwsdG45Lg3ZbQw.', 'EhT2S569xUkKgGpbWltC5PEW80H6NAFQ9jjqGgWqOq0UQJRUpy28Z8QbrUuK', '2018-02-06 14:10:08', '2018-02-06 14:10:08'),
(3, 0, 'sssss', 'ss@ss.ss', '$2y$10$jeMBr.FehclBtwCcd3aJnuqFV4P8wHhOimq5m6mcdFoIQjOjJK1zW', '2e5dlOgF3NE5lVWNW6fyBwCTYmRBBpKGCAdGIQmdi6vAFZp01sjFcPMrJan9', '2018-02-06 14:35:57', '2018-02-06 14:35:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
