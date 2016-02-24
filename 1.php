<?php

init_db();

$user_id = $_GET['id'];

mysql_query("SELECT * FROM users WHERE id = $user_id");
