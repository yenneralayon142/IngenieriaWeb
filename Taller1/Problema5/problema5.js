/*Dado un número o valor en metros (m), realice el cálculo de conversión a km, hm, dm, cm y mm. Imprima el resultado*/

const convert = () => {
    const input = document.getElementById("number")
    const number = Number(input.value)
    const result = document.getElementById("result")

    const km = number * 0.001
    const hm = number * 0.01
    const dm = number * 10
    const cm = number * 100
    const mm = number * 1000

    result.textContent = `${number} seria igual a: en ${km} km, ${hm} hm, ${dm} dm, ${cm} cm, ${mm} mm`
}