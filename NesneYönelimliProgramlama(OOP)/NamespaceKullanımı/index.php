<?php

require 'app/controller/Home.php';
require 'app/view/Home.php';

$homeController = new \app\controller\Home();
echo "<br>";
$homeView = new \app\view\Home();