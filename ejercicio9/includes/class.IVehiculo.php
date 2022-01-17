<?php
interface IVehiculo{
    public function circula();

    public function __set($name, $value);

    public function __get($name);

    public static function ver_atributo($obj)
}

?>