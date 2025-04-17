export async function renderCharacters(characters) {
    const container = document.getElementById("character-list");
    container.innerHTML = ""; // Limpiamos lo anterior

    characters.map(char => {
        const div = document.createElement("div"); // Creamos un div
        div.className = "card"; // Le damos clase para estilos

        // Insertamos HTML dentro del div con info del personaje
        div.innerHTML = `
            <h5>${char.name}</h5>
            <p>Status: ${char.status}</p>
            <p>Species: ${char.species}</p>
            <img src="${char.image}"></img>
        `;

        // 🔑 Aquí usamos appendChild para agregar ese div al contenedor
        container.appendChild(div);
    });
}