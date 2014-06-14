<?php

/**
 * Watlz
 * @author Cristobal Diaz Alvarez <cristobal@cristobaldiaz.cl>
 * @license Copyright (c) 2013-2014 Cristobal Diaz Alvarez - Reservados todos los derechos, http://www.cristobaldiaz.cl/license.html
 */
class Modelo {

    protected $q;
    protected $empresa;

    function __construct() {
        if (isset($_SESSION['usr'])) {
            $this->empresa = $_SESSION['usr']['emp'];
        }
    }

    function iniciaTransaccion() {
        $this->q->iniciaTransaccion();
    }

    function rollbackTransaccion() {
        return $this->q->rollbackTransaccion();
    }

    function commitTransaccion() {
        return $this->q->commitTransaccion();
    }

    function getLastId() {
        return $this->q->getLastId();
    }

}

?>
