<?php
include ('./app/Util/Autoloader.php');
include ('./View/header.php');
use app\Database\Db;

$conn =Db::getDatabse();

include ('./View/footer.php');

