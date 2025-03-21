-- Database: adons_database

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


------------------------------------------------------------

--
-- Table structure for table `ads_table`
--

-- Database: adons_database

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `ads_table`
--
CREATE TABLE `ads_table` (
    `ad_id` int(11) NOT NULL,
    `title` varchar(20) NOT NULL,
    `description` varchar(200) NOT NULL,
    `image_url` varchar(50),
    `video_url` varchar(50) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp(),
);

ALTER TABLE ads_table ADD PRIMARY KEY (ad_id);

CREATE TABLE `comments_table` (
    `comment_id` int(11) NOT NULL,
    `ad_id` int(11) NOT NULL,
    `user_name` varchar(50) NOT NULL,
    `user_comment` varchar(100),
    `created_at` datetime NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`comment_id`),
    FOREIGN KEY (`ad_id`) REFERENCES `ads_table`(`ad_id`) ON DELETE CASCADE
);


CREATE TABLE `subscribers_table` (
    `subscriber_id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `subscribed_at` datetime NOT NULL DEFAULT current_timestamp(),
  	PRIMARY KEY (`subscriber_id`) 
);


CREATE TABLE `contact_table` (
    `contact_id` int(11) NOT NULL,
    `name` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL,
    `message` varchar(100),
    `sent_at` datetime NOT NULL DEFAULT current_timestamp(),
  	PRIMARY KEY (`contact_id`)
);
