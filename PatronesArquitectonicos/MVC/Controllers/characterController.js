import {apiRickyMorty} from "../Models/characterModel.js"
import { renderCharacters } from "../Views/characterView.js"

export async function characterModule() {
    try{
        const characters = await apiRickyMorty()
        renderCharacters(characters)
    }catch(error){
        console.error("Ocurrió un error en el controlador", error)
    }
}
