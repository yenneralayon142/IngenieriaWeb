/*Calcule el área de un rectángulo (se debe pedir al usuario los datos para el cálculo). Imprima el resultado */
const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const input2 = document.getElementById("number2")
    const number2 = Number(input2.value)
    const result = document.getElementById("result")

    result.textContent = `El área del rectangulo es ${number * number2}`
}