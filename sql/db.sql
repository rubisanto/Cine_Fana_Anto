-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 mars 2022 à 15:47
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cine_fana`
--

-- --------------------------------------------------------

--
-- Creation de la base de donnée
--

DROP DATABASE IF EXISTS `cine_fana`;
CREATE DATABASE `cine_fana`;
USE `cine_fana`;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `admin_pseudo` varchar(50) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_adress` varchar(30) NOT NULL,
  `admin_date_of_birth` date NOT NULL,
  `admin_sex` varchar(10) NULL,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `article_title` varchar(30) NOT NULL,
  `article_date` date NOT NULL,
  `article_author` varchar(50) NOT NULL,
  `article_content` text NOT NULL,
  `article_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `comment_date` date NOT NULL,
  `comment_author` varchar(30) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `contact_first_name` varchar(50) NOT NULL,
  `contact_last_name` varchar(50) NOT NULL,
  `contact_type` varchar(30) NOT NULL,
  `contact_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `post_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `post_title` varchar(30) NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(30) NOT NULL,
  `post_content` text NOT NULL,
  `post_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_title` varchar(30) NOT NULL,
  `product_date` date NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `product_synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_pseudo` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_adress` varchar(30) NOT NULL,
  `user_date_of_birth` date NOT NULL,
  `user_sex` varchar(10) NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
