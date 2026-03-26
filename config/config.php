<?php
define("BASE_URL", "");
define('DEV_MODE', true);

function get_database_config(): array
{
    return [
        'server'   => 'localhost',
        'database' => 'bdd_project_web',
        'username' => 'root',
        'password' => 'admin'
    ];
}
