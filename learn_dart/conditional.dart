import 'dart:io';

void main() {
  //if else
  // String? installApps;
  // stdout.write("Apakah anda akan menginstall aplikasi ini y/t? ");
  // installApps = stdin.readLineSync();
  // if (installApps == "y") {
  //   print("anda akan menginstall aplikasi dart");
  // } else {
  //   print("aborted");
  // }
//Soal no. 1
  stdout.write("Apakah anda akan menginstall aplikasi ini y/t? ");
  var installApps = stdin.readLineSync();
  installApps == 'y'
      ? print("anda akan menginstall aplikasi dart")
      : print("aborted");

//Soal no. 2
  stdout.write("memasukkan nama anda: ");
  String? namaGame = stdin.readLineSync();
  stdout.write("memasukkan peran anda: ");
  String? peranGame = stdin.readLineSync();
  //warning jika pertanyaan tidak di jawab
  if (namaGame == '' && peranGame == '') {
    print("Nama harus diisi!");
  } else if (peranGame == '') {
    print("$namaGame, Pilih peranmu untuk memulai game!");
  } else if (peranGame == "Penyihir") {
    print(
        "'$namaGame' dan peran '$peranGame' Selamat datang di Dunia Werewolf,$namaGame "
        "Halo '$peranGame' '$namaGame', kamu dapat melihat siapa yang menjadi werewolf!");
  } else if (peranGame == "Guard") {
    print(
        "'$namaGame' dan peran '$peranGame' Selamat datang di Dunia Werewolf,$namaGame "
        "Halo '$peranGame' '$namaGame', kamu akan membantu melindungi temanmu dari serangan werewolf.");
  } else {
    print(
        "'$namaGame' dan peran '$peranGame' Selamat datang di Dunia Werewolf,$namaGame "
        "Halo '$peranGame' '$namaGame', Kamu akan memakan mangsa setiap malam!");
  }

//Soal no.3
  stdout.write("Masukan nama hari yang pasti akan membuatmu bahagia: ");
  String? namaHari = stdin.readLineSync();
  switch (namaHari) {
    case "Senin":
      {
        print(
            "Senin: Segala sesuatu memiliki kesudahan, yang sudah berakhir biarlah berlalu dan yakinlah semua akan baik-baik saja.");
        break;
      }
    case "Selasa":
      {
        print(
            "Selasa: Setiap detik sangatlah berharga karena waktu mengetahui banyak hal, termasuk rahasia hati.");
        break;
      }
    case "Rabu":
      {
        print(
            "Rabu: Jika kamu tak menemukan buku yang kamu cari di rak, maka tulislah sendiri.");
        break;
      }
    case "Kamis":
      {
        print(
            "Kamis: Jika hatimu banyak merasakan sakit, maka belajarlah dari rasa sakit itu untuk tidak memberikan rasa sakit pada orang lain.");
        break;
      }
    case "Jumat":
      {
        print("Jumat: Hidup tak selamanya tentang pacar.");
        break;
      }
    case "Sabtu":
      {
        print(
            "Sabtu: Rumah bukan hanya sebuah tempat, tetapi itu adalah perasaan.");
        break;
      }
    default:
      {
        print(
            "Minggu: Hanya seseorang yang takut yang bisa bertindak berani. Tanpa rasa takut itu tidak ada apapun yang bisa disebut berani.");
      }
  }
  // Soal no.4
  var tanggal = 31;
  var bulan = 11;
  var tahun = 2200;
  var namaBulan;
  if (tanggal < 1 || tanggal > 31) {
    print("tanggal tidak benar");
  } else if (bulan < 1 || bulan > 12) {
    print("bulan tidak benar");
  } else if (tahun < 1900 || tahun > 2200) {
    print("tahun tidak benar");
  } else {
    switch (bulan) {
      case 1:
        {
          namaBulan = "Januari";
          break;
        }
      case 2:
        {
          namaBulan = "Februari";
          break;
        }
      case 3:
        {
          namaBulan = "Maret";
          break;
        }
      case 4:
        {
          namaBulan = "April";
          break;
        }
      case 5:
        {
          namaBulan = "Mei";
          break;
        }
      case 6:
        {
          namaBulan = "Juni";
          break;
        }
      case 7:
        {
          namaBulan = "Juli";
          break;
        }
      case 8:
        {
          namaBulan = "Agustus";
          break;
        }
      case 9:
        {
          namaBulan = "September";
          break;
        }
      case 10:
        {
          namaBulan = "Oktober";
          break;
        }
      case 11:
        {
          namaBulan = "November";
          break;
        }
      case 12:
        {
          namaBulan = "Desember";
          break;
        }
      default:
    }
    print("$tanggal $namaBulan $tahun");
  }
}
