const calcule = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")
    const operation = ((number ** 2) * Math.sqrt(3)) / 4 

    result.textContent = `El área del triangulo equilatero es ${operation}`
}