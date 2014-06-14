<?php

class Config {

    static function getDb() {
        return array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'armatuplato'
        );
    }

    static function getMail() {
        return array(
            'user' => 'armatuplato@cristobaldiaz.cl',
            'pass' => 'armatuplato',
            'host' => $_SERVER['SERVER_NAME'],
            'fromName' => 'ARMA TU PLATO'
        );
    }

}

?>