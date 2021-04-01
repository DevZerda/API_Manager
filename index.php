<?php

// File
include("config/main.php");
include("include/db.php");
include("shell_functions/main.php");

// classes calling
$Config = new Config();
$shell = new shell_functions();

$fag = true;

while($fag = true) {
    $inputCMD = readline($Config->hostname);
    $Config->setCmdInfo($inputCMD);
    $shell->CommandHandler();
}

