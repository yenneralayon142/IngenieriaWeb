/*Realice un programa que convierta una temperatura dada en grados centígrados a grados Fahrenheit. Imprima la temperatura en grados centígrados y en grados Fahrenheit */

const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const input2 = document.getElementById("resultNumber")
    const result = document.getElementById("result")

    const operation = (number * 9/5) + 32

    input2.textContent = `Centigrados:${number}`
    result.textContent = `Farenheit: ${operation}`
}