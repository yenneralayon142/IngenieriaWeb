/*Calcule el área de un círculo (se debe pedir al usuario los datos para el cálculo). Imprima el resultado*/
const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")

    const operation = 3.14159 * (number ** 2)

    result.textContent = `El área del circulo es ${operation}`
}