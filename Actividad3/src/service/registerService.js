export const sendRegisterForm = (formData) => {
    return fetch('../databaseConnection.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        // Verificamos si la respuesta tiene formato JSON
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();  // Interpretamos la respuesta como JSON
    })
    .then(data => {
        if (data && data.message) {
            console.log('Mensaje del servidor:', data.message); // Muestra el mensaje de texto
            if (data.data) {
                console.log('Datos recibidos:', data.data); // Muestra los datos recibidos
            }
            return data; // Retorna los datos para otros usos
        } else {
            throw new Error('Respuesta JSON no válida o faltan campos');
        }
    })
    .catch(error => {
        console.error('Error al realizar la solicitud:', error);
        throw error;
    });
};

export const getRegisterData = () => {
    const formData = new FormData();
    formData.append('fetchData', 'true');  // Añadimos la instrucción para obtener datos

    return sendRegisterForm(formData)
    .then(data => {
        if (Array.isArray(data.data)) {
            renderTable(data.data);  // Renderizamos la tabla si la respuesta contiene un array de datos
        } else {
            console.error('Error al obtener los datos:', data.message || 'Respuesta inválida');
        }
    })
    .catch(error => {
        console.error('Error al obtener los datos:', error);
    });
};

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
};

// Llamada para obtener los datos al cargar la página
document.addEventListener('DOMContentLoaded', getRegisterData);
