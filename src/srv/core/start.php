<?php
/**
 * Watlz
 * @author Cristobal Diaz Alvarez <cristobal@cristobaldiaz.cl>
 * @license Copyright (c) 2013-2014 Cristobal Diaz Alvarez - Reservados todos los derechos, http://www.cristobaldiaz.cl/license.html
 */

require(dirname(__FILE__) . "/config.php");
require(dirname(__FILE__) . "/Q.class.php");
require(dirname(__FILE__) . "/Validation.class.php");
require(dirname(__FILE__) . "/Modelo.class.php");
$_config = new Config();
$_q = new Q($_config->getDb());
?>