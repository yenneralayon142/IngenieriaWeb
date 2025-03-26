/*Escriba un programa que calcule la factorial de un número introducido por teclado. Para todo número natural n, se llama n factorial o factorial de n al producto de todos los enteros entre 1 y n. Imprima el resultado. */

const calcule = () => {
    const numeroInput = document.getElementById("number");
    const numero = Number(numeroInput.value);
    const result = document.getElementById("result")
    let resultado = 1;

    if (numero < 0) {
        result.textContent = "Numero negativo no admitido"
        return;
    }

    for (let i = 1; i <= numero; i++) {
        resultado *= i;
    }

    result.textContent = `El factorial del ${numero} es ${resultado}`
};