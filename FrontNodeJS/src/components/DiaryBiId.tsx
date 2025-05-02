import React,{useEffect, useState} from "react";
import useDiariesById from "../Hooks/useDiariesById"

const DiariesById: React.FC = () => {
  const [inputId, setInputId] = useState<number | null>(null)
  const [searchId, setSearchId] = useState<number | null>(null)

  const { diary, loading, error,setError } = useDiariesById(searchId)

  const handleSearch = () => {
    if (inputId !== null && inputId > 0) {
      setSearchId(inputId)
    } else {
      setError("El id debe ser mayor a cero")  
    }
  }

  return (
    <div className="diary">
      <label htmlFor="searchId">Buscar diario por ID:</label><br />
      <input
        id="searchId"
        type="text"
        placeholder="Ej: 2"
        value={inputId ?? ''}
        onChange={(e) => setInputId(Number(e.target.value))}
      />
      <button onClick={handleSearch}>Buscar</button>

      {error && <p style={{color:'red'}}>{error}</p>}
      {diary && (
        <div>
          <h3>Resultado:</h3>
          <p><strong>Fecha:</strong> {diary.date}</p>
          <p><strong>Clima:</strong> {diary.weather}</p>
          <p><strong>Visibilidad:</strong> {diary.visibility}</p>
        </div>
      )}
    </div>
  )
}

export default DiariesById
