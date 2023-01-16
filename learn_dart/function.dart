import 'dart:io';

//Soal no.1
void main(List<String> args) {
  print(teriak('"Halo Sanbers!"'));
// Untuk soal no. 2
  var num1 = 12;
  var num2 = 4;
  var hasilKali = kalikan(num1, num2);
  print(hasilKali);
// Untuk soal no. 3
  var name = "Agus";
  var age = 30;
  var address = "Jln. Malioboro, Yogyakarta";
  var hobby = "Gaming";
  var perkenalan = introduce(name, age, address, hobby);
  print(perkenalan);
// Untuk soal n0. 4
  print(faktorial(6)); // akan menampilkan 720
  print(faktorial(0)); // akan menampilkan 1
}

teriak(hasil) {
  return hasil;
}

//Soal no. 2
/*var num1 = 12;
  var num2 = 4;
  var hasilKali = kalikan(num1, num2);
  */
kalikan(perkalian, number) {
  return perkalian * number;
}

// Soal no. 3
/*var name = "Agus";
  var age = 30;
  var address = "Jln. Malioboro, Yogyakarta";
  var hobby = "Gaming";
  var perkenalan = introduce(name, age, address, hobby);
  print(perkenalan); }
  */
introduce(nama, umur, alamat, hobi) {
  return "Nama saya $nama, umur saya $umur tahun, alamat saya di $alamat, an saya punya hobby yaitu $hobi!";
}

// Soal no.4
/* print(faktorial(6)); // akan menampilkan 720
  print(faktorial(0)); // akan menampilkan 1
  print(faktorial(-5)); // akan menampilkan 1
*/
int faktorial(int n) {
  // Jika n kurang dari atau sama dengan 0, maka return 1
  if (n <= 0) {
    return 1;
  }
  // Jika tidak, maka lakukan perulangan dari 2 sampai n
  else {
    int hasil = 1;
    for (int i = 1; i <= n; i++) {
      hasil *= i;
    }
    return hasil;
  }
}
