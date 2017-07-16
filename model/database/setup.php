<?php
require_once('DB_config.php');
try {
    $db = new PDO($DB_DSN_GLOBAL, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query("CREATE DATABASE IF NOT EXISTS storage");
} catch (PDOException $e) {
    echo "ERROR CREATING DB: " . $e->getMessage() . "\n";
}
try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query("CREATE TABLE IF NOT EXISTS film_info (
	film_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	title VARCHAR(100) NOT NULL ,
	year INT(4) NOT NULL,
	format VARCHAR (10) NOT NULL,
	actors VARCHAR(255) NOT NULL
	)");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>