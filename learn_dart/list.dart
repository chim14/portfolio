//Soal no. 1
void main() {
  List<int> range(int startNum, int finishNum) {
    List<int> output = [];
    for (int i = startNum; i <= finishNum; i++) {
      output.add(i);
    }
    return output;
  }

  List<int> startNumbers = range(1, 10);
  List<int> finishNumbers = range(11, 18);
  List<int> kombinasi = startNumbers + finishNumbers;
  for (int i = kombinasi.length - 1; i >= 0; i--) {
    print(kombinasi[i]);
  }

//Soal no.2
  List<int> rangeWithStep(int startNum, int finishNum, int step) {
    List<int> output = [];
    if (step > 0) {
      for (int j = startNum; j <= finishNum; j += step) {
        output.add(j);
      }
    } else if (step < 0) {
      for (int j = startNum; j >= finishNum; j += step) {
        output.add(j);
      }
    }
    return output;
  }

  print(rangeWithStep(1, 10, 2)); // [1, 3, 5, 7, 9]
  print(rangeWithStep(11, 23, 3)); // [11, 14, 17, 20, 23]
  print(rangeWithStep(5, 2, -1)); // [5, 4, 3, 2]

//Soal no.3
  var input = [
    ["0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1989", "Membaca"],
    ["0002", "Dika Sembiring", "Medan", "10/10/1992", "Bermain Gitar"],
    ["0003", "Winona", "Ambon", "25/12/1965", "Memasak"],
    ["0004", "Bintang Senjaya", "Martapura", "6/4/1970", "Berkebun"]
  ];
  var dataHandling = [];
  for (var data in input) {
    dataHandling.add({
      "NOMOR ID": data[0],
      "Nama Lengkap": data[1],
      "TTL": data[2] + " " + data[3],
      "Hobi": data[4]
    });
  }
  print(dataHandling);
}
