import 'dart:io';

//Mohamad Maolana Abdulchim
//Soal No. 1 (Membuat kalimat),
void main(List<String> args) {
  var word = 'dart';
  var second = 'is';
  var third = 'awesome';
  var fourth = 'and';
  var fifth = 'I';
  var sixth = 'love';
  var seventh = 'it!';
  var list_wording = ("$word" +
      " " "$second" +
      " " "$third" +
      " " "$fourth" +
      " " "$fifth" +
      " " "$sixth" +
      " " "$seventh");
  print(list_wording);

//Soal No.2 Mengurai kalimat (Akses karakter dalam string)
  var sentence = "I am going to be Flutter Developer";
  var firstWord = sentence[0];
  var secondWord = sentence[2] + sentence[3];
  var thirdWord = sentence.substring(5, 10);
  var fourthWord = sentence.substring(11, 13);
  var fifthWord = sentence.substring(14, 16);
  var sixthWord = sentence.substring(17, 24);
  var seventhWord = sentence.substring(25, 34);

  print('First Word: ' + firstWord);
  print('Second Word: ' + secondWord);
  print('Third Word: ' + thirdWord);
  print('Fourth Word: ' + fourthWord);
  print('Fifth Word: ' + fifthWord);
  print('Sixth Word: ' + sixthWord);
  print('Seventh Word: ' + seventhWord);

//Soal No.3 dengan menggunakan I/O pada dart buatlah input dinamis yang akan menginput nama depan dan belakang dan jika di enter
//akan menggabungkan nama depan dan belakang
  print("nama depan: ");
  var depan = stdin.readLineSync();
  print("nama belakang: ");
  var belakang = stdin.readLineSync();
  print("$depan" + " " "$belakang");

// Soal No.4 Dengan menggunakan operator operasikan variable berikut ini menjadi bentuk operasi perkalian, penjumlahan,
//pengurangan dan pembagian a = 5,  b = 10 jadi misal a * b = 5 * 10 = 50 dst.
  int a = 5;
  int b = 10;
  var perkalian = a * b;
  var pembagian = a / b;
  var penjumlahan = a + b;
  var pengurangan = a - b;
  String kali = "$perkalian";
  String bagi = "$pembagian";
  String tambah = "$penjumlahan";
  String kurang = "$pengurangan";

  print("perkalian : " + kali);
  print("pembagian : " + bagi);
  print("penambahan : " + tambah);
  print("pengurangan : " + kurang);
}
