<?php

/**
 * Watlz
 * @author Cristobal Diaz Alvarez <cristobal@cristobaldiaz.cl>
 * @license Copyright (c) 2013-2014 Cristobal Diaz Alvarez - Reservados todos los derechos, http://www.cristobaldiaz.cl/license.html
 */
class Validation {

    private $regFecha = '/^\d{1,2}-\d{1,2}-\d{4}$/';
    /* private $strMilisegundos = '/^\d{1,13}$/'; */
    private $regAlfa = '|^[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]*$|';
    private $regAlfaSpace = '|^[a-zA-ZñÑáéíóúÁÉÍÓÚ,.\s]*$|';
    private $regAlfaNumerico = '|^[a-zA-Z\dñÑáéíóúÁÉÍÓÚ,.]*$|';
    private $regAlfaNumericoSpace = '|^[a-zA-Z\d\sñÑáéíóúÁÉÍÓÚ,.]*$|';
    private $regNombreArchivo = '[^/?*:;{}\\]+\\.[^/?*:;{}\\]+';
    private $vars = null;
    private $errObj = array();
    private $validations = array();

    public function __construct($objVars = null) {
        $this->vars = $objVars;
    }

    public function returnIfNull($value, $isNull, $notNull = null) {
        if (strlen(trim($value)) > 0)
            return ($notNull === null) ? $value : $notNull;
        else
            return $isNull;
    }

    static function strim($P) {
        foreach ($P as $a => $v)
            $P[$a] = trim($v);
        return $P;
    }

    function trim($P) {
        foreach ($P as $a => $v)
            $P[$a] = trim($v);
        return $P;
    }

    function trimValues($o = null) {
        if (gettype($o) === 'array')
            foreach ($o as $f)
                $this->vars[$f] = trim($this->vars[$f]);
        else
            $this->vars = $this->trim($this->vars);
        return $this;
    }

    function formatValues($obj) {
        if (gettype($obj) === 'array') {
            foreach ($obj as $f => $v) {
                switch ($v) {
                    case 'lower':
                        $this->vars[$f] = trim(strtolower($this->vars[$f]));
                        break;
                    case 'upper':
                        $this->vars[$f] = trim(strtoupper($this->vars[$f]));
                        break;
                    case 'camel':
                        $this->vars[$f] = trim(strtoupper(substr($this->vars[$f], 0, 1)) . strtolower(substr($this->vars[$f], 1)));
                        break;
                }
            }
        }
        return $this;
    }

    function setObjVars($objVars) {
        $this->vars = $objVars;
        return $this;
    }

    public function addField($n, $ex1, $ex2 = null, $ex3 = null, $required = true) {
        array_push($this->validations, array(
            "nombre" => $n,
            "val" => array($ex1, $ex2, $ex3, $required)
        ));
        return $this;
    }

    function getObjVars() {
        return $this->vars;
    }

    public function resetFields() {
        $this->errObj = array();
        $this->validations = array();
    }

    function checkExistValues() {
        $this->errObj = array();
        $e = 0;
        foreach ($this->validations as $f) {
            if (!array_key_exists($f["nombre"], $this->vars)) {
                array_push($this->errObj, array("nombre" => $f["nombre"], "result" => false));
                $e++;
            } else
                array_push($this->errObj, array("nombre" => $f["nombre"], "result" => true));
        }
        return $e === 0;
    }

    public function run() {
        $this->errObj = array();
        foreach ($this->validations as $f) {
            $a = array("nombre" => $f["nombre"], "value" => $this->vars[$f["nombre"]], "result" => false);
            if ($f["val"][3] === true || ($a["value"] != null || strlen(trim($a["value"])) > 0)) {
                switch ($f["val"][0]) {
                    case "Texto":
                        $a["result"] = $this->validaTexto($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "TextoSpace":
                        $a["result"] = $this->validaTextoSpace($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "TextoNumero":
                        $a["result"] = $this->validaTextoNumero($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "TextoNumeroSpace":
                        $a["result"] = $this->validaTextoNumeroSpace($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "TextoNumeroSU":
                        $a["result"] = $this->validaTextoNumeroSU($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "Numero":
                        $a["result"] = $this->validaNumero($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "Float":
                        $a["result"] = $this->validarFloat($a['value']);
                        break;
                    case "NumeroRango":
                        $a["result"] = $this->validaNumeroRango($a["value"], $f["val"][1], $f["val"][2]);
                        break;
                    case "Mail":
                        $a["result"] = $this->validarMail($a["value"]);
                        break;
                    case "Valores":
                        $a["result"] = $this->validarValores($a["value"], $f["val"][1]);
                        break;
                    case "Fecha":
                        $a["result"] = $this->validaFecha($a["value"]);
                        break;
                    case "JSONString":
                        $a["result"] = $this->validaJSONString($a["value"]);
                        break;
                    case "JSONObject":
                        $a["result"] = $this->validaJSONObject($a["value"], $f["val"][1]);
                        break;
                    case "reg":
                        $a["result"] = preg_match($f["val"][1], $a["value"]);
                        break;
                    case "URL":
                        $a['result'] = $this->validarUrl($a['value']);
                        break;
                    case 'NombreArchivo':
                        $a['result'] = preg_match($this->regNombreArchivo, $a['value']);
                        break;
                    default:
                        $a["result"] = false;
                        break;
                }
            } else {
                $a["result"] = true;
            }
            array_push($this->errObj, $a);
        }
        return $this;
    }

    public function getTotalErrors() {
        $c = 0;
        foreach ($this->errObj as $o)
            if ($o["result"] === false)
                $c++;
        return $c;
    }

    public function getObjError() {
        return $this->errObj;
    }

    public function validaTexto($texto, $min, $max) {
        return ($this->validarAlfabetico($this->unicodeString($texto)) &&
                $this->longitudMayorIgualQue($texto, $min) && $this->longitudMenorIgualQue($texto, $max));
    }

    public function validaTextoSpace($texto, $min, $max) {
        return ($this->validarAlfabeticoSpace($this->unicodeString($texto)) &&
                $this->longitudMayorIgualQue($texto, $min) && $this->longitudMenorIgualQue($texto, $max));
    }

    public function validaTextoNumero($texto, $min, $max) {
        return ($this->validarAlfaNumerico($this->unicodeString($texto)) &&
                $this->longitudMayorIgualQue($texto, $min) && $this->longitudMenorIgualQue($texto, $max));
    }

    public function validaTextoNumeroSpace($texto, $min, $max) {
        return ($this->validarAlfaNumericoSpace($this->unicodeString($texto)) &&
                $this->longitudMayorIgualQue($texto, $min) && $this->longitudMenorIgualQue($texto, $max));
    }

    public function validaTextoNumeroSU($texto, $min, $max) {
        return ($this->validarAlfaNumerico($texto) &&
                $this->longitudMayorIgualQue($texto, $min) && $this->longitudMenorIgualQue($texto, $max));
    }

    public function validaNumero($num, $min = 1, $max = null) {
        return ($this->ValidarDigitos($num) && (($min != null) ? $this->longitudMayorIgualQue($num, $min) : true) && (($max != null) ? $this->longitudMenorIgualQue($num, $max) : true));
    }

    public function validaNumeroRango($num, $min = 0, $max = 999999) {
        if ($this->validaNumero($num)) {
            $num = intval($num);
            return ($num >= $min && $num <= $max);
        } else
            return false;
    }

    public function validaFecha($f) {
        return $this->validarFecha($f);
    }

    public function validaJSONString($o) {
        json_decode($o);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    public function validaJSONObject($json, $o) {
        if (is_array($json)) {
            foreach ($o as $k)
                if (!key_exists($k, $json))
                    return false;
            return true;
        } else
            return false;
    }

    public function validarValores($value, $values) {
        $ret = false;
        if (gettype($values) === "array") {
            foreach ($values as $val) {
                if ($value == $val)
                    $ret = true;
            }
        } else
            return $ret;
        return $ret;
    }

    //validar un mail
    public function validarMail($valor) {
        return (filter_var($valor, FILTER_VALIDATE_EMAIL) === false) ? false : true;
    }

    //validar un float
    private function validarFloat($valor) {
        return (filter_var($valor, FILTER_VALIDATE_FLOAT) === false) ? false : true;
    }

    //validar una url
    private function validarUrl($valor) {
        return (filter_var($valor, FILTER_VALIDATE_URL) === false) ? false : true;
    }

    //validar un entero
    private function validarEntero($valor) {
        return (filter_var($valor, FILTER_VALIDATE_INT) === false) ? false : true;
    }

    //validar una fecha
    private function validarFecha($valor) {
        return preg_match($this->regFecha, $valor);
    }

    //validar un texto alfabético
    private function validarAlfabetico($valor) {
        return preg_match($this->regAlfa, $valor);
    }

    private function validarAlfabeticoSpace($valor) {
        return preg_match($this->regAlfaSpace, $valor);
    }

    //validar un texto alfabético
    private function validarAlfaNumerico($valor) {
        return preg_match($this->regAlfaNumerico, $valor);
    }

    private function validarAlfaNumericoSpace($valor) {
        return preg_match($this->regAlfaNumericoSpace, $valor);
    }

    //validar que una cadena sólo tenga dígitos
    private function validarDigitos($valor) {
        return preg_match('|^[0-9.]+$|', $valor);
    }

    //comprobamos que la longitud de una cadena es menor a la indicada por parámetro
    private function longitudMenorIgualQue($valor, $longitud) {
        return strlen($valor) <= $longitud;
    }

    //comprobamos que la longitud de una cadena es mayor o igual a la indicada por parámetro
    private function longitudMayorIgualQue($valor, $longitud) {
        return strlen($valor) >= $longitud;
    }

    private function unicodeString($str, $encoding = null) {
        if (is_null($encoding))
            $encoding = ini_get('mbstring.internal_encoding');
        return preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/u', create_function('$match', 'return mb_convert_encoding(pack("H*", $match[1]), ' . var_export($encoding, true) . ', "UTF-16BE");'), $str);
    }

}

?>
