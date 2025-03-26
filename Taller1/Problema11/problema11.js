/*Realice un programa que reciba un número y que determine si este es un número primo. Imprima el resultado. */
const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")

    if(number <= 1){
        result.textContent = `No es primo`
        return
    }
    if(number <= 3){
        result.textContent = `Si es primo`
        return
    }
    if(number % 2 === 0 || number % 3 === 0){
        result.textContent = `No es primo`
        return
    }
    for(let i = 5; i * i <= number; i+=6){
        if(number % i === 0 || number % (i+2) === 0){
            result.textContent = `No es primo`
            return
        }
    }
    result.textContent = `Si es primo`
}