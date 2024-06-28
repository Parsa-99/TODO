<?php
include "bootstrap/init.php";
use Hekmatinasser\Verta\Verta;
$datetime = verta();
// if now friday
// output 6
// connect to db and get tasks
$folders = getFolders();
$tasks = getTasks();
include "tpl/tpl-index.php";