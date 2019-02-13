
--
-- Database: `lotuspoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Announcement_ID` int(11) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `challenge_enroll`
--

CREATE TABLE `challenge_enroll` (
  `client_ID` int(10) NOT NULL,
  `challenege_ID` int(10) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `class_ID` int(10) NOT NULL,
  `coach_ID` int(10) NOT NULL,
  `rating` int(11) NOT NULL,
  `number_participans` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `class_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE `class_type` (
  `class_type_ID` int(10) NOT NULL,
  `class_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_type`
--

INSERT INTO `class_type` (`class_type_ID`, `class_type`) VALUES
(1, 'Yoga'),
(2, 'Zomba'),
(3, 'Pillates'),
(4, 'Belly Dancing');

-- --------------------------------------------------------

--
-- Table structure for table `client_class_review`
--

CREATE TABLE `client_class_review` (
  `class_ID` int(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `user_still_in_class` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_ID` int(10) NOT NULL,
  `client_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `client_height` double NOT NULL,
  `client_weight` double NOT NULL,
  `client_age` int(11) NOT NULL,
  `client_photo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `client_number_classes` int(11) NOT NULL,
  `challenges_completed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_ID`, `client_name`, `client_height`, `client_weight`, `client_age`, `client_photo`, `client_number_classes`, `challenges_completed`) VALUES
(5, 'chahira', 160, 55, 20, '', 0, 0),
(6, 'Taghreed', 170, 45, 25, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coach_info`
--

CREATE TABLE `coach_info` (
  `coach_ID` int(10) NOT NULL,
  `coach_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_classes` int(11) NOT NULL,
  `coach_photo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `coach_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_review`
--

CREATE TABLE `general_review` (
  `user_Id` int(11) NOT NULL,
  `review_description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_challenges`
--

CREATE TABLE `monthly_challenges` (
  `challenege_ID` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `number_participants` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `ID` int(11) NOT NULL,
  `email_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `Tip_ID` int(11) NOT NULL,
  `Coach_ID` int(11) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `tip_picture` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `workout_ID` int(11) NOT NULL,
  `coach_ID` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Announcement_ID`);

--
-- Indexes for table `challenge_enroll`
--
ALTER TABLE `challenge_enroll`
  ADD PRIMARY KEY (`client_ID`,`challenege_ID`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`class_ID`),
  ADD KEY `coach_fk` (`coach_ID`);

--
-- Indexes for table `class_type`
--
ALTER TABLE `class_type`
  ADD PRIMARY KEY (`class_type_ID`);

--
-- Indexes for table `client_class_review`
--
ALTER TABLE `client_class_review`
  ADD PRIMARY KEY (`class_ID`,`user_ID`),
  ADD KEY `client` (`user_ID`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `coach_info`
--
ALTER TABLE `coach_info`
  ADD PRIMARY KEY (`coach_ID`);

--
-- Indexes for table `general_review`
--
ALTER TABLE `general_review`
  ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `monthly_challenges`
--
ALTER TABLE `monthly_challenges`
  ADD PRIMARY KEY (`challenege_ID`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`Tip_ID`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`workout_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `Announcement_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_info`
--
ALTER TABLE `class_info`
  MODIFY `class_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monthly_challenges`
--
ALTER TABLE `monthly_challenges`
  MODIFY `challenege_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `Tip_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `workout_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `challenge_enroll`
--
ALTER TABLE `challenge_enroll`
  ADD CONSTRAINT `clieny_enroll_fk` FOREIGN KEY (`client_ID`) REFERENCES `client_info` (`client_ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `class_info`
--
ALTER TABLE `class_info`
  ADD CONSTRAINT `coach_fk` FOREIGN KEY (`coach_ID`) REFERENCES `coach_info` (`coach_ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `client_class_review`
--
ALTER TABLE `client_class_review`
  ADD CONSTRAINT `class` FOREIGN KEY (`class_ID`) REFERENCES `class_info` (`class_ID`),
  ADD CONSTRAINT `client` FOREIGN KEY (`user_ID`) REFERENCES `client_info` (`client_ID`);

--
-- Constraints for table `client_info`
--
ALTER TABLE `client_info`
  ADD CONSTRAINT `client_fk` FOREIGN KEY (`client_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `coach_info`
--
ALTER TABLE `coach_info`
  ADD CONSTRAINT `coach_id` FOREIGN KEY (`coach_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

