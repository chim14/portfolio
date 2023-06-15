const input = prompt ("Masukkan angka: ");
let array = [];

for(let a = 1; a <= input; a++){
  array.push(a);
}
console.log(array);

for(let i = 0; i < array.length; i++){
  if( array[i] % 3 === 0){
    console.log(array[i] + " adalah bilangan habis di bagi 3");
  } else if 
    ( array[i] % 5 === 0){
    console.log(array[i] + " adalah bilangan habis di bagi 5");
    }else{
    console.log(array[i] + " adalah bilangan selain itu");
  }
}

const filterTiga = array.filter(item => item % 3 === 0);
console.log(filterTiga + " adalah bilangan habis di bagi 3");
const filterLima = array.filter(item => item % 3 === 0);
console.log(filterLima + " adalah bilangan habis di bagi 3");