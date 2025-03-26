/*Realice un programa que calcule los primeros 10 números de la sucesión Fibonacci. Imprima el resultado. */
const calcule = () => {
    const result = document.getElementById("result");
    let a = 0
    let b = 1
    let c = 0
    let list = [a,b]
    for(let i= 2; i < 10; i++){
        c = a +b 
        list.push(c)
        a = b
        b = c
    }
    result.textContent = list.join(', ')
    
}