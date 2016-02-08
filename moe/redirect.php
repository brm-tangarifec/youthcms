<?php
require("requires.php");
// Se inician las variables
$url=$_GET['url'];

Moe::start();
Moe::redirect($url);