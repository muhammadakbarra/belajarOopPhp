<?php
class ContohStatic{
    public static $angka = 1;
    public static function halo(){
        return "Halo " . self::$angka++ . " Kali";
    }
}

//dengan menggunakan static maka kita bisa mengakses class tanpa perlu membuat objek nya
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();

//dengan menggunakan static maka nilai nya akan tetap walaupun class di instance berulang kali