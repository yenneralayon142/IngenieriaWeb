/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */

function Anag (word1, word2) {
    if(word1 === word2){
        return false
    }
    const sorted1 = word1.toLowerCase().split('').sort().join()
    const sorted2 = word2.toLowerCase().split('').sort().join()
    return sorted1 === sorted2
}
console.log(Anag("word","ward"))