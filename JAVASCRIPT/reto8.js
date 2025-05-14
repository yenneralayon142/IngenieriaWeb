/*
 * Crea un programa que cuente cuantas veces se repite cada palabra
 * y que muestre el recuento final de todas ellas.
 * - Los signos de puntuación no forman parte de la palabra.
 * - Una palabra es la misma aunque aparezca en mayúsculas y minúsculas.
 * - No se pueden utilizar funciones propias del lenguaje que
 *   lo resuelvan automáticamente.
 */

function countWords(text){
    const words = {}

    const textClean = text
        .toLowerCase()
        .replace(/[^a-z0-9]/g,' ')
        .split(' ')

        for(let i = 0; i < textClean.length;i++){
            const key = textClean[i]
            if(key === '') continue
            if(words[key] !== undefined){
                words[key]++
            }else{
                words[key] = 1
            }
        }

        for(const word in words){
            const count = words[word]
            console.log(`${word} se ha repetido ${count} ${count === 1 ? "vez" : "veces"}`)
        }
}

countWords("Hola, mi nombre es brais. Mi nombre completo es Brais Moure (MoureDev).");