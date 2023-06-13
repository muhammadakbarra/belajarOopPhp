<?php
//Abstrack Class
//sebuah kelas yang tidak dapat di-instansiasi
//kelas 'abstrack
//mendefinisikan interface untuk kelas lain yang menjadi turunannya
//Berperan sebagai 'kerangka dasar' untuk kelas turunanya
//memiliki minimal 1 method abstrak

//jadi class abstrack itu berguna untuk supaya sebuah class parent yang tidak
//memiliki karakteristik agar tidak bisa di instansiasi

//misal contoh saya punya parent class bernama Makanan dan di dalam nya terdapat method memakan
//dan misal kita punya child class bernama apel, pisang
//jika instansi apel dan pisang dan menggunakan method makan kan kita tau apa yang kita makan
//sedangkan jika class makanan kita bisa instansi terus memakai method makan kan kita tidak tau apa yang di makan.


//untuk membuat class abstrack

//abstract class buah{
//
//}

//saat kita memiliki class abstrack maka semuah child class harus mengimplementasikan method\
//abstrack yang ada di kelas abstrack


