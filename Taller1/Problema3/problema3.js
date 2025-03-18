/*Si se tienen tres notas de un estudiante, calcule el promedio. Imprima las notas y el promedio.*/

const resultNotes = () => {
    const note1 = document.getElementById("note1")
    const number1 = Number(note1.value)
    const note2 = document.getElementById("note2")
    const number2 = Number(note2.value)
    const note3 = document.getElementById("note3")
    const number3 = Number(note3.value)
    const result = document.getElementById("result")

    const operation = (number1 + number2 + number3) / 3

    result.textContent = `Las notas del estudiante son ${number1}, ${number2}, ${number3} y el promedio es ${operation}`
    
}