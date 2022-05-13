<?php
include 'connection.php';

try {
    $sql = "CREATE TABLE products(
    IID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(IID),
    name VARCHAR(225),
    category VARCHAR(225),
    price INT,
    description VARCHAR(225),
    photo VARCHAR(225)
    )";
    $db->exec($sql);
    echo " table created";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
