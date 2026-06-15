-- Tạo database
CREATE DATABASE IF NOT EXISTS socialnet
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE socialnet;

-- Tạo bảng account
DROP TABLE IF EXISTS account;

CREATE TABLE account (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    fullname VARCHAR(150) NOT NULL,
    email VARCHAR(100),
    password VARCHAR(255) NOT NULL,
    description TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
