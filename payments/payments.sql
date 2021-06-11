

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `stack` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `stack` (`id`, `fname`, `lname`, `phone`, `email`) VALUES
(1, 'Fred', 'finado', '0890999887', 'finado@gmail.com', ),
(2, 'chitor', 'David', '08097313071', 'thelordofapps@gmail.com', );

-
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/