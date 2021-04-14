<?php
  //los metodods preotegidos solo pueden ser accedidos
  //desde herencia de clases o solo clases hijas
  class clasePadre{
    protected function metodo1(){
      return "metodo protegido";
    }
  }
  class claseHija extends clasePadre{
    public function muestra(){
      return self::metodo1();
    }
  }
  /* $obj=new clasePadre();
  echo $obj->metodo1(); */
  $obj=new claseHija();
  echo $obj->muestra();
?>