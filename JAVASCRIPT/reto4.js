/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 */

function isPrime (n) {
    if(n < 2) return false
    if(n === 2) return true
    if(n % 2 === 0) return false

    for(let i = 3; i <= Math.sqrt(n); i += 2){
        if(n % i === 0) return false 
    }
    return true
}

function numberPrime (){
    for(let i = 0; i < 100; i++){
        if(isPrime(i)){
            console.log(i, "El número es Primo")
        }else{
            console.log(i)
        }
    }
}

numberPrime()