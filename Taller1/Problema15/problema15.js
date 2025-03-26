/*Dado un número entero positivo N, escribe un programa que determine cuántos dígitos se necesitan para escribir el valor N. Por ejemplo, 99 necesita 2 dígitos, 115 necesita 3, para 1000 la salida es 4, etc. Imprima el resultado. */

const calcule = () => {
    const input = document.getElementById("number")
    const value = input.value.trim()
    const numDigits = value.length;
    const result = document.getElementById("result");
    result.textContent = `Se necesitan ${numDigits} dígitos para escribir el valor ${value}.`
}