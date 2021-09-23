<?php

// define('NAMA', 'Fauzan Nursalma');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// // define tidak bisa di simpan didalam class (hanya bisa bersifat global)
// // const dapat di simpan didalam class

// class Coba {
//   const NAMA = 'Fauzan';
// }

// echo Coba::NAMA;

// Magic Constant :
// __LINE__ | __DIR__ | __CLASS__
// __FILE__ | __FUNCTION__ | __TRAIT__
// __METHOD__ | __NAMESPACE__

// echo __FILE__;

// function coba(){
//   return __FUNCTION__;
// }
// echo coba();

class Coba {
  public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

?>