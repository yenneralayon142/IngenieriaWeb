/*Realice un programa que reciba un número y que determine si es par o impar. Imprima el resultado*/
const numberResult = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")

    if(number % 2 === 0){
        result.textContent = "El número es par" 
    }
    else{
        result.textContent = "El número es impar"
    }
}