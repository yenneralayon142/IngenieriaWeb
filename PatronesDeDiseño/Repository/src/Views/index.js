fetch('http://localhost:8000/IngenieriaWeb/PatronesDeDiseño/Repository', {
    method: 'POST',
    body: JSON.stringify({ name: 'Carlos'}),
    headers: { 'Content-Type': 'application/json' }
  })
  .then(res => res.json())
  .then(data => console.log('Usuario creado:', data));