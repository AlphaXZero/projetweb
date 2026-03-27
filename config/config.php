<?php
define("BASE_URL", getenv('BASE_URL') ?: "");
define('DEV_MODE', getenv('DEV_MODE') !== false ? (bool)getenv('DEV_MODE') : true);

function get_database_config(): array
{
    return [
        'server'   => getenv('MYSQLHOST')     ?: 'localhost',
        'database' => getenv('MYSQLDATABASE') ?: 'bdd_project_web',
        'username' => getenv('MYSQLUSER')     ?: 'root',
        'password' => getenv('MYSQLPASSWORD') ?: 'admin',
    ];
}
