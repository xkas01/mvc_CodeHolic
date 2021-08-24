<?php

use app\core\Application;

class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "";
        $db->pdo->exec($SQL);
    }
}