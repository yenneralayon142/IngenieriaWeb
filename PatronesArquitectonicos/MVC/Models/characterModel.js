export async function apiRickyMorty() {
    try {
        const res = await fetch("https://rickandmortyapi.com/api/character/")
        const data = await res.json()
        const arrayCharacter = data.results.map(character => ({
            name:character.name,
            status:character.status,
            species:character.species,
            image:character.image
        }) )
        console.log(arrayCharacter)
        return arrayCharacter
    } catch (error) {
        console.log(error)
    }
}

   
