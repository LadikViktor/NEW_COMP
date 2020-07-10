<?php

use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\Runner;

include "../vendor/autoload.php";


$h = new Runner(DB::LinK([
    'host' => 'Localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'admid'
]));

print_r($h->runSQL("SELECT * FROM `group`, `users` WHERE `group` . `id` = `users` . `group_id`"));
