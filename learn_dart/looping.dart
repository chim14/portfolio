import 'dart:io';
//Soal no.1

void main(List<String> args) {
  var loopSatu = 2;
  var loopDua = 20;
  print("LOPPING PERTAMA");
  while (loopSatu <= 20) {
    print(loopSatu.toString() + " - I love coding");
    loopSatu += 2;
  }
  print("LOPPING KEDUA");
  while (loopDua >= 2) {
    print(loopDua.toString() + " - I will become a mobile Developer");
    loopDua -= 2;
  }

//Soal no. 2
  print("OUTPUT");
  for (var kata = 1; kata <= 20; kata++) {
    if (kata % 2 == 0) {
      print(kata.toString() + ". Berkualitas");
    } else if (kata % 3 == 0) {
      print(kata.toString() + ". I love coding");
    } else {
      print(kata.toString() + ". Santai");
    }
  }

//Soal no. 3
  for (int i = 1; i <= 4; i++) {
    for (int j = 1; j <= 8; j++) {
      stdout.write('#');
    }
    stdout.writeln();
  }

//Soal no. 4
  for (int i = 0; i <= 7; i++) {
    print("#" * i);
    // }
  }
}
