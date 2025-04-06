fetch('http://tu-backend/register-user.php', {
    method: 'POST',
    body: JSON.stringify({ name: 'Carlos'}),
    headers: { 'Content-Type': 'application/json' }
  })
  .then(res => res.json())
  .then(data => console.log('Usuario creado:', data));