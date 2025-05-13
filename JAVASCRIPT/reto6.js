/*
 * Crea un programa que se encargue de calcular el aspect ratio de una
 * imagen a partir de una url.
 * - Url de ejemplo:
 *   https://raw.githubusercontent.com/mouredevmouredev/master/mouredev_github_profile.png
 * - Por ratio hacemos referencia por ejemplo a los "16:9" de una
 *   imagen de 1920*1080px.
 */

function calculeImage (url) {
    const img = new Image()
    img.src = url;

    img.onload = function () {
        const ancho = img.width
        const alto = img.height

        const mcd = (a,b) => b === 0 ? a : mcd(b,a %b)

        const divisor = mcd(ancho,alto)
        const ratioAncho = ancho / divisor
        const ratioAlto = alto / divisor

        console.log(`Resolución: ${ancho}*${alto}`)
        console.log(`Aspect Ratio: ${ratioAncho}:${ratioAlto}`)
    }

    img.onerror = function () {
        console.log("No se puede cargar la imagen")
    }
}

calculeImage(` https://raw.githubusercontent.com/mouredevmouredev/master/mouredev_github_profile.png`)