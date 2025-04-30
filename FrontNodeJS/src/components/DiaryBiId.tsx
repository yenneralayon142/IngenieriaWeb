import React,{useState} from "react";
import useDiariesById from "../Hooks/useDiariesById"

const DiariesById: React.FC = () => {
 const [inputId, setInputId] = useState<number | null>(null)
  const [searchId, setSearchId] = useState<number | null>(null)

  const { diary, loading, error } = useDiariesById(searchId)

  const handleSearch = () => {
    if (inputId !== null && inputId > 0) {
      setSearchId(inputId)
    }
  }

  return (
    <div className="diary">
      <label htmlFor="searchId">Buscar diario por ID:</label>
      <input
        id="searchId"
        type="number"
        placeholder="Ej: 2"
        value={inputId ?? ''}
        onChange={(e) => setInputId(Number(e.target.value))}
      />
      <button onClick={handleSearch}>Buscar</button>

      {loading && <p>Cargando...</p>}
      {error && <p>{error}</p>}
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
