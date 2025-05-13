/*
 * Crea un programa que invierta el orden de una cadena de texto
 * sin usar funciones propias del lenguaje que lo hagan de forma automática.
 * - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"
 */

function invertWord (word) {
    let result = ''

    for(let i = word.length - 1; i >= 0; i--){
        result += word[i]
    }

    return result
}
console.log(invertWord("Holaa"))