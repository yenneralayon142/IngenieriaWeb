/*1. Realice un programa que reciba un número y que determine si es positivo o negativo. Imprima el resultado*/


const numberPositive = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")

    if(number == 0){
        result.textContent = "El número es 0"
    }
    else if(number > 0){
        result.textContent = "El número es positivo"
    }
    else
    {
        result.textContent = "El número es negativo"
    }
}