<?php
require_once __DIR__ . "/../../app/db/database.php";

$id = $_GET['nid'] ?? 0;
$a = new Database;
$r = $a->delet($id);
header("location: /index.php");