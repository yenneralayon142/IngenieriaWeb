/*
 * Crea un programa que cuente cuantas veces se repite cada palabra
 * y que muestre el recuento final de todas ellas.
 * - Los signos de puntuación no forman parte de la palabra.
 * - Una palabra es la misma aunque aparezca en mayúsculas y minúsculas.
 * - No se pueden utilizar funciones propias del lenguaje que
 *   lo resuelvan automáticamente.
 */

function count (word) {
    result = 0
    for(let i = 0; i < word.length ; i++){
        if(word === word){
            result += 1
            break
        }
    }
    return (`La palabra se repite:${result} veces`)
}
console.log(count("holaa holaa holaa feo feo"))