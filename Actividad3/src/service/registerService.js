export const sendRegisterForm = (formData) => {
    return fetch('../databaseConnection.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())  // Cambiar a `.json()` si esperas respuestas en JSON
    .catch(error => {
        console.error('Error al realizar la solicitud:', error);
        throw new Error('Error al realizar la solicitud');
    });
};

export const getRegisterData = () => {
    const formData = new FormData();
    formData.append('fetchData', 'true');  // Añadimos la instrucción para obtener datos

    return sendRegisterForm(formData)
    .then(data => {
        if (Array.isArray(data)) {
            renderTable(data);  // Renderizamos la tabla si la respuesta es un array de datos
        } else {
            console.error('Error al obtener los datos:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al obtener los datos:', error);
    });
}

// Función para renderizar la tabla
const renderTable = (data) => {
    const tableBody = document.querySelector('#registerTable tbody');
    tableBody.innerHTML = '';  // Limpiar la tabla antes de agregar los nuevos datos

    data.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.nombre}</td>
            <td>${item.apellido}</td>
            <td>${item.edad}</td>
            <td>${item.ciudad}</td>
            <td>${item.celular}</td>
            <td>${item.usuario}</td>
        `;
        tableBody.appendChild(row);
    });
}

// Llamada para obtener los datos al cargar la página

document.addEventListener('DOMContentLoaded', getRegisterData);