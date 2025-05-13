/*
 * Crea una única función (importante que sólo sea una) que sea capaz
 * de calcular y retornar el área de un polígono.
 * - La función recibirá por parámetro sólo UN polígono a la vez.
 * - Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
 * - Imprime el cálculo del área de un polígono de cada tipo.
 */

function calculePolygone (polygon) {
    switch (polygon.type.toLowerCase()) {
        case "triangulo":
            return (polygon.base * polygon.altura) / 2
        case "cuadrado":
            return polygon.lado * polygon.lado
        case "rectangulo":
            return polygon.base * polygon.altura
    }
}
console.log("Area del poligono: ",calculePolygone({type:"triangulo",base:10,altura:5}))
console.log("Area del poligono: ",calculePolygone({type:"cuadrado",lado:5}))
console.log("Area del poligono: ",calculePolygone({type:"rectangulo",base:10,altura:5}))
