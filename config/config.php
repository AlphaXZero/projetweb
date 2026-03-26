<?php
define("BASE_URL", "");
define('DEV_MODE', true);

function getDatabaseConfig(): array
{
    return [
        'server'   => 'localhost',
        'database' => 'bdd_project_web',
        'username' => 'root',
        'password' => ''
    ];
}
