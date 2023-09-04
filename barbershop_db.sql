

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `appointments` (
  `appointment_id` int(5) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `client_id` int(5) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time_expected` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `canceled` tinyint(1) NOT NULL DEFAULT 0,
  `cancellation_reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clients` (
  `client_id` int(5) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `employees` (
  `employee_id` int(2) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `employees_schedule` (
  `id` int(5) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `day_id` tinyint(1) NOT NULL,
  `from_hour` time NOT NULL,
  `to_hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `services` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_description` varchar(255) NOT NULL,
  `service_price` decimal(6,2) NOT NULL,
  `service_duration` int(5) NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `services_booked` (
  `appointment_id` int(5) NOT NULL,
  `service_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `service_categories` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `FK_client_appointment` (`client_id`),
  ADD KEY `FK_employee_appointment` (`employee_id`);

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_email` (`client_email`);

ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

ALTER TABLE `employees_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_emp` (`employee_id`);

ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `FK_service_category` (`category_id`);

ALTER TABLE `services_booked`
  ADD PRIMARY KEY (`appointment_id`,`service_id`),
  ADD KEY `FK_SB_service` (`service_id`);

ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`category_id`);

ALTER TABLE `appointments`
  MODIFY `appointment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `clients`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `employees`
  MODIFY `employee_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `employees_schedule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE `services`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `service_categories`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `appointments`
  ADD CONSTRAINT `FK_client_appointment` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_employee_appointment` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE;

ALTER TABLE `employees_schedule`
  ADD CONSTRAINT `FK_emp` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE;

ALTER TABLE `services`
  ADD CONSTRAINT `FK_service_category` FOREIGN KEY (`category_id`) REFERENCES `service_categories` (`category_id`) ON DELETE CASCADE;

ALTER TABLE `services_booked`
  ADD CONSTRAINT `FK_SB_appointment` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_SB_service` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_appointment` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`);
COMMIT;
