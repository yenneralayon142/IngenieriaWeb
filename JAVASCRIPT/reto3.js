/*
 * Escribe un programa que imprima los 50 primeros números de la sucesión
 * de Fibonacci empezando en 0.
 * - La serie Fibonacci se compone por una sucesión de números en
 *   la que el siguiente siempre es la suma de los dos anteriores.
 *   0, 1, 1, 2, 3, 5, 8, 13...
 */

function fibonacci () {
    let a = 0
    console.log(a)
    let b = 1
    console.log(b)
    for(let i = 2;i < 50;i++){
        c = a + b
        console.log(c)
        a = b
        b = c
    }
}
fibonacci()
