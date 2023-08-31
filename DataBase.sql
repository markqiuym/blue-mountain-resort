

-------------------------------------------------------------------------------------------------------------------------------


CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhoneNum` int(11) DEFAULT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-------------------------------------------------------------------------------------------------------------------------------------

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
COMMIT;



