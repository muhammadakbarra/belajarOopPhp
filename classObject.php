<?php

//class adalah blue print
// untuk membuat instance dari object
//class mendefinisikan object
//menyimpam data dan prilaku yang disebut dengan property dan method

//cara membuat class
//1. diaawli dengan menuliskan keyword class, diikuti nama dan dibatsi dengan{}
//untuk menyimpan property dan method
//2. aturan penamaan class sama seperti variabel

class Coba{
    public  $a;//property

    //method
    public function b(){

    }
}

//Object
//instance yang didefinisikan oleh class
//banyak object dapat dibuat menggunakan satu class
//Object dibuat dnegan menggunakan keyword new

//cara membuat object instance dari class
$a = new Coba();
$b = new Coba();
