<?php
//contoh class
class puding{
    // contoh property
    public $rasapuding;
    public $banyakpuding;
    public $banyakkirim;
    // contoh method
    public function getCetak (){
        return "$this->rasapuding, $this->banyakpuding, $this->banyakkirim";
    }
}

 // contoh objek nya
 $puding1 = new puding();
 $puding1->rasapuding="coklat";
 $puding1->banyakpuding="10";
 $puding1->banyakkirim="5";
 var_dump($puding1);

 ?>