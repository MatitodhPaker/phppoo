<?php
  class clasePadre{
    public  function metodoPadre(){
      return "hola desde del padre";
    }
    public function metodo1(){
      return "este es un metodo padre con parent";
    }
  }
  class claseHijo extends clasePadre{
    public function metodohijo(){
      return self::metodo1();
    }
    public function metodo1(){
      return "este es un metodo hijo con self";
    }
    public function metodo2(){
      return parent::metodo1();
    }
  }
  //lahernecia es obtener todas las propiedades de una clase a otra
  //mediante la  palabra reservada extends
  $objeto=new claseHijo();
  echo $objeto->metodoPadre();
  echo "<br>";
  echo $objeto->metodohijo();
  echo "<br>";
  echo $objeto->metodo2();
  //instancia rapida o de doble puntacion
  //echo claseHijo::metodoPadre(); -> lo tuve que pasar a statico el metodo ya que me mandaba un error
?>