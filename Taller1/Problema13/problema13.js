/* Cree un programa donde se calcule la potencia 𝑥𝑦. Se debe recibir la base y la potencia, y no se puede utilizar el objeto Math. Imprima el resultado. */
const calcule = () => {
    let baseNumber = parseInt(document.getElementById("number1").value);
    let exponentNumber = parseInt(document.getElementById("number2").value);
    const resultElement = document.getElementById("result");
    let powerResult = 1;

    if (exponentNumber < 0) {
        resultElement.textContent = "No se admiten exponentes negativos.";
        return;
    }

    for (let i = 0; i < exponentNumber; i++) {
        powerResult *= baseNumber;
    }

    resultElement.textContent = `Resultado: ${powerResult}`;
};