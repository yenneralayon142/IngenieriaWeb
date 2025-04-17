export async function apiRickyMorty() {
    try {
        const res = await fetch("https://rickandmortyapi.com/api/character/")
        const data = await res.json()
        const arrayCharacter = data.results.slice(1,6).map(character => ({
            name:character.name,
            status:character.status,
            specie:character.species
        }) )
        console.log(arrayCharacter)
        return arrayCharacter
    } catch (error) {
        console.log(error)
    }
}

   
