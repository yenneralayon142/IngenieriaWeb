/*Lea un número y calcule el cuadrado y el cubo.Imprima el resultado*/

const numberCube = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")
    const operation1 = number ** 2
    const operation2 = number ** 3

    result.textContent = `El cuadrado del número es ${operation1} y el cubo es ${operation2}`
}


