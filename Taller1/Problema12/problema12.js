const calcule = () => {
    const result = document.getElementById("result")
    let a = 0 
    let b = 1
    let c = 0
    let list = []
    for(let i = 0; i < 10;i++){
        c = a + b
        list.push(c)
        a = b
        b = c
    }
    result.textContent = list.join(', ')
}