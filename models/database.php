<?php

class Database {

    static public function connect() {
        $DB_HOST = 'localhost';
        $DB_NAME = 'yuppie_db';
        $DB_USER = 'root';
        $DB_PASS = '';

        try {
            $connected = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $connected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connected;
        } catch (PDOException $e) {
            echo 'ERROR:' . $e->getMessage();
        }
    }

}
