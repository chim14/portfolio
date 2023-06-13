const numberOne = prompt("Masukkan angka pertama: "); //untuk mempop up inputan
let numberTwo = 0; //define sebuah variable angka 1
let arrayNumber = []; //define array yang disimpan

//sebuah fungsi lopping untuk mengecek jumlah angka yang pertama dan
// menginput angka kedua sesuai jumlah yang di input di angka pertama
while (numberTwo < numberOne) {
  arrayNumber[numberTwo] = prompt(`Masukkan angka ke- ${numberTwo + 1}:`);
  numberTwo++;
}

console.log(numberOne); //menampilkan angka pertama
console.log(arrayNumber); //menampilkan jumlah array yang di input di angka kedua

//fungsi untuk mengecek ganjil genap
function checkOddOrEven(arrayNumber) {
  let totalEven = 0; //define total genap
  let totalOdd = 0; //define total ganjil
  let allSum = 0; //define total keseluruhan yang di input

  //menghitung bilangan genap dan ganjil
  for (let i = 0; i < arrayNumber.length; i++) {
    if (arrayNumber[i] % 2 === 0) {
      console.log(arrayNumber[i] + " adalah bilangan genap");
      totalEven += parseInt(arrayNumber[i]);
    } else {
      console.log(arrayNumber[i] + " adalah bilangan ganjil");
      totalOdd += parseInt(arrayNumber[i]);
    }
    allSum += parseInt(arrayNumber[i]);
  }

  console.log("Total bilangan genap: " + totalEven);
  console.log("Total bilangan ganjil: " + totalOdd);
  console.log("Total semua bilangan: " + allSum);
}

checkOddOrEven(arrayNumber);
