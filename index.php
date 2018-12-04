<?php
function die_r($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
}
require_once 'Database.php';
$db = new Database();

$getRow = $db->getRow("SELECT * FROM ooppdo.users WHERE id = ?", ["1"]);
$getRows = $db->getRows("SELECT * FROM ooppdo.users");
$insertRow = $db->insertRow("INSERT INTO ooppdo.users(username, password, email)VALUE(?,?,?)",["artur","1111333","qweewq@awe"]);
$updateRow = $db->updateRow("UPDATE ooppdo.users SET username = ?, password = ? WHERE id = ?", ["arturkrecdenis","aa2321", "3"]);
$deleteRow = $db->deleteRow("DELETE FROM ooppdo.users WHERE id = ?", ["1"]);
die_r($updateRow);