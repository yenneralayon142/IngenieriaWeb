function crearUsuario() {
  fetch('http://localhost:8000/Controllers/api.php', {
    method: 'POST',
    body: JSON.stringify({ id: 3, name: 'Carlos' }),
    headers: { 'Content-Type': 'application/json' }
  })
  .then(res => res.json())
  .then(data => console.log('Respuesta del backend:', data));
}