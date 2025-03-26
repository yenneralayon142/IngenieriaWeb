/*Calcule el área de un triángulo equilátero (se debe pedir al usuario los datos para el cálculo). Imprima el resultado */
const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")
    const operation = ((number ** 2) * Math.sqrt(3)) / 4 

    result.textContent = `El área del triangulo equilatero es ${operation}`
}