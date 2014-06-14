<?php
/**
 * Watlz
 * @author Cristobal Diaz Alvarez <cristobal@cristobaldiaz.cl>
 * @license Copyright (c) 2013-2014 Cristobal Diaz Alvarez - Reservados todos los derechos, http://www.cristobaldiaz.cl/license.html
 */

class Q {

    private $con;
    private $affectedRows = 0;
    private $lastId = 0;
    private $result = null;

    function __construct($config) {
        $this->con = mysqli_connect($config["host"], $config["user"], $config["password"], $config["database"]) or die(
                        Response::error("No se ha logrado conectar con el servidor de base de datos.")
        );
        mysqli_set_charset($this->con, 'utf8');
    }

    function q($q) {
        $this->result = $this->con->query($q) or die(
                        Response::error("Error al ejecutar la operación.", array(
                            "errno" => mysqli_errno($this->con),
                            "error" => mysqli_error($this->con),
                            "query" => $q)));
        $this->affectedRows = mysqli_affected_rows($this->con);
        $this->lastId = mysqli_insert_id($this->con);
        return $this->result;
    }

    public function s($q, $ac = null, $nullable = true) {
        $r = array();
        $a = $this->con->query($q) or die(
                        Response::error("Error al ejecutar la operación.", array(
                            "errno" => mysqli_errno($this->con),
                            "error" => mysqli_error($this->con),
                            "query" => $q))
        );
        switch ($ac) {
            case "row":
                $r = mysqli_fetch_array($a, MYSQLI_ASSOC);
                break;
            case "one":
                $r = mysqli_fetch_array($a);
                $r = $r[0];
                break;
            default:
                while ($row = mysqli_fetch_array($a, MYSQLI_ASSOC))
                    $r[] = $row;
                break;
        }
        if (count($r) === 0 && $nullable === true)
            return null;
        else
            return $r;
    }

    function iniciaTransaccion() {
        $this->con->autocommit(false);
    }

    function rollbackTransaccion() {
        $this->con->rollback();
        return false;
    }

    function commitTransaccion() {
        $this->con->commit();
        return true;
    }

    public function row($q) {
        return $this->s($q, "row");
    }

    public function one($q) {
        return $this->s($q, "one");
    }

    function getAffectedRows() {
        return $this->affectedRows;
    }

    function getResult() {
        return $this->result;
    }

    function getLastId() {
        return $this->lastId;
    }

}

?>
