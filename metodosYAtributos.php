<?php
  class miClase{
    //declaramos atributos
    public $atributo1="hola mundo";

    //declaramos metododos
    public function miMetodo(){
      // como pedmos mandar a llamar el atributo
      //utilizando la pseudo variable this

      return  $this->atributo1;
    }
  }
?>