<?php
  class miClase{
    public $mensaje =1;
    public static function hola(){
      return "hola";
    }
    public static function metodo(){
      /* return $this-$mensaje; -> no puedes acceder a los atributos */
      return self::hola();//->ya solo funciona con metodos estaticos
    }
  }
  echo miClase::metodo();
?>