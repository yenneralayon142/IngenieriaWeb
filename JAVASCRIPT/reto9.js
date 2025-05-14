/*
 * Crea un programa se encargue de transformar un número
 * decimal a binario sin utilizar funciones propias del lenguaje que lo hagan directamente.
 */

function binarieNumber(number){
    let result = ''
    while(number > 0){
        let remainder = number % 2
        result = remainder + result
        number = Math.floor(number/2)
    }

    return result || '0'
}
console.log(binarieNumber(10))
