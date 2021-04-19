{\rtf1\ansi\ansicpg1252\cocoartf2576
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.9.7\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:3306\
-- Generation Time: Apr 19, 2021 at 03:58 PM\
-- Server version: 5.7.32\
-- PHP Version: 8.0.0\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `todo_list`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `todos`\
--\
\
CREATE TABLE `todos` (\
  `id` int(11) NOT NULL,\
  `title` text NOT NULL,\
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,\
  `checked` tinyint(1) NOT NULL DEFAULT '0'\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `todos`\
--\
\
INSERT INTO `todos` (`id`, `title`, `date_time`, `checked`) VALUES\
(38, 'spanish', '2021-04-19 01:29:17', 0),\
(39, 'japanese', '2021-04-19 01:29:20', 0),\
(40, 'English', '2021-04-19 01:35:10', 0);\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `todos`\
--\
ALTER TABLE `todos`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `todos`\
--\
ALTER TABLE `todos`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;}