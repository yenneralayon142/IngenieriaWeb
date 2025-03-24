/*Calcule el área de un cuadrado (se debe pedir al usuario los datos para el cálculo). Imprima el resultado*/
const zone = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")
    const operation = number ** 2

    result.textContent = `El área del cuadrado es ${operation}`
}