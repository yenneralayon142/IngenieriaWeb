export const sendRegisterForm = (formData) => {
    return fetch('../databaseConnection.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .catch(error => {
        throw new Error('Error al enviar el formulario');
    })
}


